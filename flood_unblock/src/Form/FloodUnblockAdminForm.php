<?php

/**
 * @file
 * Contains \Drupal\flood_unblock\Form\FloodUnblockAdminForm.
 */

namespace Drupal\flood_unblock\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Controller routines for block example routes.
 */
class FloodUnblockAdminForm extends FormBase {
  // Admin form of Flood unblock.

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'flood_unblock_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  // protected function getEditableConfigNames() {
  //   return [
  //     'flood_unblock.form'
  //   ];
  // }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['email'] = array(
      '#type' => 'email',
      '#title' => $this->t('Your .com email address.')
    );
    $form['show'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
