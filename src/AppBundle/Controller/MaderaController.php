<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\MessageSelector;


use AppBundle\Entity\Devis;
use AppBundle\Entity\Modele;
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
        $projet = null;

        if (!empty($devis->getProjet())){
            $projet = $em->getRepository('AppBundle:Projet')->findOneById($devis->getProjet());
        }

        return $this->render('AppBundle:Madera:devis.html.twig', array(
            'devis' => $devis,
            'projet' => $projet
            )
        );

    }


    /**
    *
    * @Route("/building", name="building")
    * @return RedirectResponse
    *
    */
    public function buildingAction()
    {
        return $this->render('AppBundle:Madera:building.html.twig');

    }


    /**
    * @param Devis $entity
    *
    * @Route("/{id}/edit", requirements={"id" = "\d+"}, name="edit_devis")
    * @return RedirectResponse
    *
    */
    public function editDevisAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $devis = $em->getRepository('AppBundle:Devis')->findOneById($id);


        $form = $this->createForm(DevisType::class, $devis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $modele = $em->getRepository('AppBundle:Modele')->findOneById($form->getData()->getModele()->getNameModele()->getId());
                $module = $em->getRepository('AppBundle:Module')->findOneByNameModule($form->getData()->getModule()->getNameModule());

                if (!empty($modele)){
                    $modele->setRemplissage($form->getData()->getModele()->getRemplissage());
                    $modele->setFinitionInterieur($form->getData()->getModele()->getFinitionInterieur());
                    $modele->setFinitionExterieur($form->getData()->getModele()->getFinitionExterieur());
                }
                $em->persist($modele);

                if (!empty($module)){
                    $module->setRefModule($form->getData()->getModule()->getRefModule());
                    $module->setSection($form->getData()->getModule()->getSection());
                    $module->setLongueur($form->getData()->getModule()->getLongueur());
                    $module->setAngleEntrant($form->getData()->getModule()->getAngleEntrant());
                    $module->setAngleSortant($form->getData()->getModule()->getAngleSortant());
                } 
                $em->persist($module);
                
                $devis->setRefDevis($form->getData()->getRefDevis());
                $devis->setNameDevis($form->getData()->getNameDevis());
                $devis->setDateDevis(new \DateTime("now"));
                $devis->setClient($form->getData()->getClient());
                $devis->setAmount($form->getData()->getAmount());
                $devis->setValidatedDateDevis($form->getData()->getDateDevis());
                $devis->setGamme($form->getData()->getGamme());
                $devis->setCoupe($form->getData()->getCoupe());
                $devis->setModule($module);
                $devis->setModele($modele);

                $em->persist($devis);
                $em->flush();

                return $this->redirectToRoute('show_devis', array('id' => $devis->getId()));

        }

        return $this->render('AppBundle:Madera:editDevis.html.twig', array(
            'form' => $form->createView(),
            'devis' => $devis
        ));

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
                $modele = $em->getRepository('AppBundle:Modele')->findOneById($form->getData()->getModele()->getNameModele()->getId());
                $module = $em->getRepository('AppBundle:Module')->findOneByNameModule($form->getData()->getModule()->getNameModule());

                if (!empty($modele)){
                    $modele->setRemplissage($form->getData()->getModele()->getRemplissage());
                    $modele->setFinitionInterieur($form->getData()->getModele()->getFinitionInterieur());
                    $modele->setFinitionExterieur($form->getData()->getModele()->getFinitionExterieur());
                }
                $em->persist($modele);

                $randRefModule = rand(10000, 99999);
                if (!empty($module)){
                    $module->setRefModule(strval($randRefModule));
                    $module->setSection($form->getData()->getModule()->getSection());
                    $module->setLongueur($form->getData()->getModule()->getLongueur());
                    $module->setAngleEntrant($form->getData()->getModule()->getAngleEntrant());
                    $module->setAngleSortant($form->getData()->getModule()->getAngleSortant());
                } 
                $em->persist($module);
                
                $randRef = rand(10000, 99999);
                $devis->setRefDevis($randRef);
                $devis->setNameDevis($form->getData()->getNameDevis());
                $devis->setDateDevis(new \DateTime("now"));
                $devis->setClient($form->getData()->getClient());
                $devis->setAmount($form->getData()->getAmount());
                $devis->setValidatedDateDevis($form->getData()->getDateDevis());
                $devis->setGamme($form->getData()->getGamme());
                $devis->setCoupe($form->getData()->getCoupe());
                $devis->setModule($module);
                $devis->setModele($modele);

                $em->persist($devis);
                $em->flush();

                return $this->redirectToRoute('show_devis', array('id' => $devis->getId()));
            }

        return $this->render('AppBundle:Madera:newDevis.html.twig', array(
            'form' => $form->createView(),
        ));

    }

    /**
    * @param Devis $entity
    *
    * @Route("/{id}/delete", requirements={"id" = "\d+"}, name="delete_devis")
    * @return RedirectResponse
    *
    */
    public function deleteDevisAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $devis = $em->getRepository('AppBundle:Devis')->findOneById($id);
        if (!empty($devis)){
            $em->remove($devis);
            $em->flush();
        }

        return $this->redirectToRoute('homepage');

    }
}



