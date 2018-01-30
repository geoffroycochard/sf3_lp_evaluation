<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contact;
use AppBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ContactController
 * @package AppBundle\Controller
 *
 * @Route("/contact")
 */
class ContactController extends Controller
{
    /**
     * @Route("/index", name="contact_index")
     */
    public function indexAction()
    {
        $contacts = $this->getDoctrine()->getRepository('AppBundle:Contact')
          ->findAll();

        return $this->render('contact/index.html.twig', array(
            'contacts' => $contacts
        ));
    }

  /**
   * @Route("/view/{id}", name="contact_view")
   *
   * @param Contact $contact
   *
   * @return \Symfony\Component\HttpFoundation\Response
   */
    public function viewAction(Contact $contact)
    {
        return $this->render('contact/view.html.twig', array(
          'contact' => $contact
        ));
    }

    /**
     * @Route("/new", name="contact_new")
     */
    public function newAction()
    {

        return $this->forward('AppBundle:Contact:edit', [
          'contact' => new Contact()
        ]);

    }

    /**
     * @Route("/edit/{id}", name="contact_edit")
     */
    public function editAction(Contact $contact, Request $request)
    {
        $form = $this->createForm(ContactType::class, $contact);
        $form->add('submit', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $contact = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('contact_view', ['id' => $contact->getId()]);
        }

        return $this->render('contact/edit.html.twig', array(
            'form' => $form->createView(),
            'contact' => $contact
        ));
    }

}
