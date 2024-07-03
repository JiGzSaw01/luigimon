<?php

declare(strict_types=1);

namespace Drupal\current_user_info\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Provides a current user info block.
 *
 * @Block(
 *   id = "current_user_info",
 *   admin_label = @Translation("Current User Info"),
 *   category = @Translation("Custom"),
 * )
 */
final class CurrentUserInfoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration(): array {
    return [
      'label_display' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state): array {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state): void {
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    $current_user = \Drupal\user\Entity\User::load(\Drupal::currentUser()->id());
    $build = [
      '#theme' => 'current_user_info_block',
      '#name' => $current_user->getDisplayName(),
      '#current_user' => $current_user,
      '#picture_uri' => $current_user->user_picture->view('thumbnail'),
    ];
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account): AccessResult {
    // @todo Evaluate the access condition here.
    return AccessResult::allowedIf(TRUE);
  }

}
