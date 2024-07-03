<?php

namespace Drupal\tagify\Element;

use Drupal\Component\Utility\Crypt;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\Textfield;
use Drupal\Core\Site\Settings;
use Drupal\Core\Url;

/**
 * Provides an entity autocomplete tagify form element.
 *
 * The autocomplete tagify form element allows users to select one or multiple
 * entities, which can come from all or specific bundles of an entity type.
 *
 * Properties:
 * - #target_type: (required) The ID of the target entity type.
 * - #tags: (optional) TRUE if the element allows multiple selection. Defaults
 *   to FALSE.
 * - #default_value: (optional) The default entity or an array of default
 *   entities, depending on the value of #tags.
 * - #selection_handler: (optional) The plugin ID of the entity reference
 *   selection handler (a plugin of type EntityReferenceSelection). The default
 *   value is the lowest-weighted plugin that is compatible with #target_type.
 * - #selection_settings: (optional) An array of settings for the selection
 *   handler. Settings for the default selection handler
 *   \Drupal\Core\Entity\Plugin\EntityReferenceSelection\DefaultSelection are:
 *   - target_bundles: Array of bundles to allow (omit to allow all bundles).
 *   - sort: Array with 'field' and 'direction' keys, determining how results
 *     will be sorted. Defaults to unsorted.
 *   - info_label: The extra information that will be shown next to
 *     the entity label.
 * - #autocreate: (optional) Array of settings used to auto-create entities
 *   that do not exist (omit to not auto-create entities). Elements:
 *   - bundle: (required) Bundle to use for auto-created entities.
 *   - uid: User ID to use as the author of auto-created entities. Defaults to
 *     the current user.
 *  - #max_items: (optional) The maximum number of items that will be shown.
 *  - #suggestions_dropdown: (required) The method uses to show the suggestions
 *     dropdown.
 *  - #match_operator: (required) The autocomplete matching option.
 *  - #show_entity_id: (optional) The method uses to show the entity id.
 *  - #identifier: (optional) The field name to avoid conflicts when there are
 *     more than one element using Tagify.
 *
 * Usage example:
 * @code
 * $form['my_element'] = [
 *  '#type' => 'entity_autocomplete_tagify',
 *  '#target_type' => 'node',
 *  '#tags' => TRUE,
 *  '#default_value' => $entities,
 *  '#selection_handler' => 'default',
 *  '#selection_settings' => [
 *    'target_bundles' => ['article', 'page'],
 *    'info_label' => '[node:type]',
 *   ],
 *  '#autocreate' => [
 *    'bundle' => 'article',
 *    'uid' => <a valid user ID>,
 *   ],
 *  '#max_items' => 10,
 *  '#suggestions_dropdown' => 1,
 *  '#match_operator' => 'CONTAINS,
 *  '#show_entity_id' => 0,
 *  '#identifier' => 'field_name',
 * ];
 * @endcode
 *
 * @see \Drupal\Core\Entity\Plugin\EntityReferenceSelection\DefaultSelection
 *
 * @FormElement("entity_autocomplete_tagify")
 */
class EntityAutocompleteTagify extends Textfield {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $info = parent::getInfo();
    $class = static::class;

    $info['#maxlength'] = NULL;
    $info['#autocreate'] = NULL;
    $info['#cardinality'] = -1;
    $info['#target_type'] = NULL;
    $info['#selection_handler'] = 'default';
    $info['#selection_settings_key'] = [];
    $info['#max_items'] = 10;
    $info['#suggestions_dropdown'] = 1;
    $info['#match_operator'] = 'CONTAINS';
    $info['#show_entity_id'] = 0;
    $info['#info_label'] = '';
    $info['#identifier'] = '';
    array_unshift($info['#process'], [$class, 'processEntityAutocompleteTagify']);

    return $info;
  }

  /**
   * Adds entity autocomplete tagify functionality to a form element.
   *
   * @param array $element
   *   The form element to process. Properties used:
   *   - #target_type: The ID of the target entity type.
   *   - #selection_handler: The plugin ID of the entity reference selection
   *     handler.
   *   - #selection_settings: An array of settings that will be passed to the
   *     selection handler.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   */
  public static function processEntityAutocompleteTagify(array &$element, FormStateInterface $form_state, array &$complete_form) {
    // Nothing to do if there is no target entity type.
    if (empty($element['#target_type'])) {
      throw new \InvalidArgumentException('Missing required #target_type parameter.');
    }

    if ($element['#autocreate']) {
      $element['#attributes']['class'][] = 'autocreate';
    }

    $element['#attached'] = [
      'library' => [
        'tagify/tagify',
        'tagify/default',
        'tagify/tagify_polyfils',
      ],
    ];

    if (_tagify_is_gin_theme_active()) {
      $element['#attached']['library'][] = 'tagify/gin';
    }

    if (_tagify_is_claro_theme_active()) {
      $element['#attached']['library'][] = 'tagify/claro';
    }

    if (!isset($element['#attributes']['class'])) {
      $element['#attributes']['class'] = [];
    }
    $element['#attributes']['class'][] = 'tagify-widget';

    if ($element['#max_items']) {
      $element['#attributes']['data-max-items'] = $element['#max_items'];
    }

    $element['#attributes']['data-suggestions-dropdown'] = $element['#suggestions_dropdown'] ?? '';
    $element['#attributes']['data-match-operator'] = ($element['#match_operator'] === 'CONTAINS') ? 1 : 0;
    $element['#attributes']['data-placeholder'] = $element['#placeholder'] ?? '';
    $element['#attributes']['data-show-entity-id'] = $element['#show_entity_id'] ?? '';
    $element['#attributes']['data-identifier'] = $element['#identifier'] ?? '';
    $element['#attributes']['data-cardinality'] = $element['#cardinality'] ?? '';

    // Store the selection settings in the key/value store and pass a hashed key
    // in the route parameters.
    $selection_settings = $element['#selection_settings'] ?? [];
    $data = serialize($selection_settings) . $element['#target_type'] . $element['#selection_handler'];
    $selection_settings_key = Crypt::hmacBase64($data, Settings::getHashSalt());

    $key_value_storage = \Drupal::keyValue('entity_autocomplete');
    if (!$key_value_storage->has($selection_settings_key)) {
      $key_value_storage->set($selection_settings_key, $selection_settings);
    }

    $element['#attributes']['data-autocomplete-url'] = Url::fromRoute('tagify.entity_autocomplete', [
      'target_type' => $element['#target_type'],
      'selection_handler' => $element['#selection_handler'],
      'selection_settings_key' => $selection_settings_key,
    ])->toString();

    // Information text.
    $element['#attached']['drupalSettings']['tagify']['information_message'] = [
      'limit_tag' => t('Tags are limited to:'),
      'no_matching_suggestions' => t('No matching suggestions found for:'),
    ];

    return $element;
  }

  /**
   * {@inheritdoc}
   */
  public static function valueCallback(&$element, $input, FormStateInterface $form_state) {
    // Process the #default_value property.
    if ($input === FALSE && isset($element['#default_value']) && $element['#default_value']) {
      // Extract the labels from the passed-in entity objects, taking access
      // checks into account.
      return static::getTagifyDefaultValue($element['#default_value'], $element['#info_label'] ?? '');
    }

    // Potentially the #value is set directly, so it contains the 'target_id'
    // array structure instead of a string.
    if ($input !== FALSE && is_array($input)) {
      $entity_ids = array_map(function (array $item) {
        return $item['target_id'];
      }, $input);
      $entities = \Drupal::entityTypeManager()->getStorage($element['#target_type'])->loadMultiple($entity_ids);

      return static::getTagifyDefaultValue($entities, $element['#info_label'] ?? '');
    }

    return NULL;
  }

  /**
   * Formats the default values array for the tagify widget.
   *
   * This method is also responsible for checking the 'view label'
   * access on the passed-in entities.
   *
   * @param \Drupal\Core\Entity\EntityInterface[] $entities
   *   An array of entity objects.
   * @param string $info_label_template
   *   The extra information that will be shown next to the entity label.
   *
   * @return false|string
   *   The tagify default values array. Associative array with at least the
   *   following keys:
   *   - 'value':
   *     The referenced entity ID, IE: 1.
   *   - 'label':
   *     The text to be shown in the autocomplete and tagify, IE: "My label"
   *   - 'entity_id':
   *     The referenced entity ID, IE: 1.
   *   - 'info_label':
   *     The extra information to be shown next to the entity label.
   */
  public static function getTagifyDefaultValue(array $entities, string $info_label_template) {
    /** @var \Drupal\Core\Entity\EntityRepositoryInterface $entity_repository */
    $entity_repository = \Drupal::service('entity.repository');
    $default_value = [];
    foreach ($entities as $entity) {
      // Set the entity in the correct language for display.
      /** @var \Drupal\Core\Entity\EntityInterface $entity */
      $entity = $entity_repository->getTranslationFromContext($entity);
      $entity_id = $entity->id();
      // Use the special view label, since some entities allow the label to be
      // viewed, even if the entity is not allowed to be viewed.
      $label = ($entity->access('view label')) ? $entity->label() : t('- Restricted access -');

      $info_label = \Drupal::token()->replacePlain(
        $info_label_template,
        [
          $entity->getEntityTypeId() => $entity,
        ],
        [
          'clear' => TRUE,
        ]
      );
      $info_label = trim(preg_replace('/\s+/', ' ', $info_label));

      $context = ['entity' => $entity, 'info_label' => $info_label_template];
      \Drupal::moduleHandler()->alter('tagify_autocomplete_match', $label, $info_label, $context);

      if ($label === NULL) {
        continue;
      }

      $default_value[] = [
        'value' => $entity_id,
        'label' => $label,
        'entity_id' => $entity_id,
        'info_label' => $info_label,
        'editable' => FALSE,
      ];
    }

    return json_encode($default_value);
  }

}
