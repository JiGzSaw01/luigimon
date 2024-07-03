<?php

namespace Drupal\tagify;

use Drupal\Component\Utility\Html;
use Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Utility\Token;

/**
 * Matcher class to get autocompletion results for entity reference.
 */
class TagifyEntityAutocompleteMatcher implements TagifyEntityAutocompleteMatcherInterface {

  /**
   * The entity reference selection handler plugin manager.
   *
   * @var \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface
   */
  protected $selectionManager;

  /**
   * The module handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The token service.
   *
   * @var \Drupal\Core\Utility\Token
   */
  protected $token;

  /**
   * Constructs a TagifyEntityAutocompleteMatcher object.
   *
   * @param \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManagerInterface $selection_manager
   *   The entity reference selection handler plugin manager.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Utility\Token $token
   *   The token service.
   */
  public function __construct(
    SelectionPluginManagerInterface $selection_manager,
    ModuleHandlerInterface $module_handler,
    EntityTypeManagerInterface $entity_type_manager,
    Token $token,
  ) {
    $this->selectionManager = $selection_manager;
    $this->moduleHandler = $module_handler;
    $this->entityTypeManager = $entity_type_manager;
    $this->token = $token;
  }

  /**
   * Gets matched labels based on a given search string.
   *
   * @param string $target_type
   *   The ID of the target entity type.
   * @param string $selection_handler
   *   The plugin ID of the entity reference selection handler.
   * @param array $selection_settings
   *   An array of settings that will be passed to the selection handler.
   * @param string $string
   *   (optional) The label of the entity to query by.
   * @param array $selected
   *   Am array of selected values.
   *
   * @return array
   *   An array of matched entity labels, in the format required by the AJAX
   *   autocomplete API (e.g. array('value' => $value, 'label' => $label)).
   *
   * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
   *   Thrown when the current user doesn't have access to the specified entity.
   *
   * @see \Drupal\system\Controller\EntityAutocompleteController
   */
  public function getMatches($target_type, $selection_handler, array $selection_settings, $string = '', array $selected = []) {
    $matches = [];
    $storage = $this->entityTypeManager->getStorage($target_type);
    $options = $selection_settings + [
      'target_type' => $target_type,
      'handler' => $selection_handler,
    ];
    $handler = $this->selectionManager->getInstance($options);
    if ($handler !== FALSE) {
      // Get an array of matching entities.
      $match_operator = !empty($selection_settings['match_operator']) ? $selection_settings['match_operator'] : 'CONTAINS';
      $match_limit = isset($selection_settings['match_limit']) ? (int) $selection_settings['match_limit'] : 10;
      $entity_labels = $handler->getReferenceableEntities($string, $match_operator, ($match_limit === 0) ? $match_limit : $match_limit + count($selected));
      // Loop through the entities and convert them into autocomplete output.
      foreach ($entity_labels as $values) {
        foreach ($values as $entity_id => $label) {
          // Filter out already selected items.
          if (in_array($entity_id, $selected)) {
            continue;
          }
          $info_label = NULL;
          $entity = $storage->load($entity_id);
          if (!empty($selection_settings['info_label'])) {
            $info_label = $this->token->replacePlain($selection_settings['info_label'], [$target_type => $entity], ['clear' => TRUE]);
            $info_label = trim(preg_replace('/\s+/', ' ', $info_label));
          }
          $context = $options + ['entity' => $entity];
          $this->moduleHandler->alter('tagify_autocomplete_match', $label, $info_label, $context);
          if ($label !== NULL) {
            $matches[$entity_id] = $this->buildTagifyItem($entity_id, $label, $info_label);
          }
        }
      }

      if ($match_limit > 0) {
        $matches = array_slice($matches, 0, $match_limit, TRUE);
      }

      $this->moduleHandler->alterDeprecated('Use hook_tagify_autocomplete_match_alter() instead.', 'tagify_autocomplete_matches', $matches, $options);
    }

    return array_values($matches);
  }

  /**
   * Builds the array that represents the entity in the tagify autocomplete.
   *
   * @return array
   *   The tagify item array. Associative array with the following keys:
   *   - 'entity_id':
   *     The referenced entity ID.
   *   - 'label':
   *     The text to be shown in the autocomplete and tagify, IE: "My label"
   *   - 'info_label':
   *     The extra information to be shown next to the entity label.
   *   - 'attributes':
   *     A key-value array of extra properties sent directly to tagify, IE:
   *     ['--tag-bg' => '#FABADA']
   */
  protected function buildTagifyItem($entity_id, $label, $info_label): array {
    return [
      'entity_id' => $entity_id,
      'label' => Html::decodeEntities($label),
      'info_label' => $info_label,
      'editable' => FALSE,
    ];
  }

}
