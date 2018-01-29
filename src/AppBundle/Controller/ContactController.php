<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/list", name="contact_list")
     */
    public function indexAction()
    {
        return $this->render('Contact/index.html.twig', array(
            // ...
        ));
    }

}
