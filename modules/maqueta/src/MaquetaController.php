<?php
namespace Drupal\maqueta\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class MaquetaController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function examenPass() {
    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }

}
