<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


use AppBundle\Entity\Devis;
use AppBundle\Form\DevisType;
use AppBundle\Manager\ModeleManager;

class MaderaController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $devisList = $em->getRepository('AppBundle:Devis')->findAll();

        return $this->render('AppBundle:Madera:summary.html.twig', array(
            'devisList' => $devisList
            )
        );
    }

    /**
     * @Route("/subscription", name="subscription")
     */
    public function subscriptionAction(Request $request)
    {
        return $this->render('AppBundle:Madera:subscription.html.twig');
    }


    /**
    * @param Devis $entity
    *
    * @Route("/{id}/show", requirements={"id" = "\d+"}, name="show_devis")
    * @return RedirectResponse
    *
    */
    public function showDevisAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('AppBundle:Devis')->findOneById($id);

        return $this->render('AppBundle:Madera:devis.html.twig', array(
            'devis' => $devis
            )
        );

    }

    /**
    *
    * @Route("/create-devis", name="create_devis")
    * @return RedirectResponse
    *
    */
    public function createDevisAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $devis = new Devis;

        $form = $this->createForm(DevisType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $devis = $form->getData();

                var_dump($devis);die();

                return $this->redirectToRoute('task_success');
            }

        return $this->render('AppBundle:Madera:subscription.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}



