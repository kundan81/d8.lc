<?php

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * HelloController class.
 */
class HelloController extends ControllerBase {
  protected $connection;

  /**
   * conntent().
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }

}
