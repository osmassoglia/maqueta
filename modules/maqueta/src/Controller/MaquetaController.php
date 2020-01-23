<?php
namespace Drupal\maqueta\Controller;

use \Drupal\Core\Controller\ControllerBase;
use \Drupal\Core\Entity\EntityInterface;
use \Drupal\node\Entity\Node;

use \Symfony\Component\HttpFoundation\RedirectResponse;
use \Drupal\Core\Routing\TrustedRedirectResponse;
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



    if(isset($_GET['e']) && isset($_GET['a'])){
      $nid = $_GET['e'];
      $node = \Drupal::entityManager()->getStorage('node')->load($nid);
      if($node->getEntityTypeId() == 'node' && $node->getType() == 'examenes'){
        $node->field_estado->setValue($_GET['a']);
      }
      $node->save();

      if(isset($_GET['callback'])){

        return new TrustedRedirectResponse('/sala_radiologia');
        //return new RedirectResponse(URL::fromUserInput('/sala_radiologia')->toString());

      }

    }


    $element = array(
      '#markup' => 'Hello, world',
    );
    return $element;
  }

}
