<?php

/**
 * @file
 * Contains \Drupal\flood_unblock\Controller\FloodUnblockController.
 */

namespace Drupal\flood_unblock\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Url;

/**
 * Controller routines for block example routes.
 */
class FloodUnblockController extends ControllerBase {

  /**
   * A simple controller method to explain what the block example is about.
   */
  public function description() {
    // Make a link from a route to the block admin page.
    //$url = Url::fromRoute('block.admin_display');
    //$block_admin_link = $this->l($this->t('the block admin page'), $url);

    // Put the link into the content.
    $build = array(
      '#markup' => $this->t('Test Description'),
    );

    return $build;
  }

  public function configuration() {
    $build = array(
      '#markup' => $this->t('This is the configuration page in process'),
    );

    return $build;
  }

}


