<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/demo")
 */
class DemoController extends Controller
{
    /**
     * @Route("/list", name="demo_list")
     */
    public function indexAction()
    {
        return $this->render('Demo/index.html.twig', array(
            // ...
        ));
    }

  /**
   * @Route("/form", name="demo_form")
   */
    public function formAction()
    {
      return $this->render('Demo/form.html.twig', array(
        // ...
      ));
    }

}
