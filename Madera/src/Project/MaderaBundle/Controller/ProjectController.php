<?php

namespace Project\MaderaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DevisController extends Controller
{
    public function loginAction()
    {
        return $this->render('MaderaBundle:Devis:connexion.html.twig');
    }

    public function showDevisAction()
    {
        return $this->render('MaderaBundle:Devis:devis.html.twig');
    }

    public function indexAction()
    {
        return $this->render('MaderaBundle:Devis:index.html.twig');
    }

    public function createDevisAction()
    {
        return $this->render('MaderaBundle:Devis:newDevis.html.twig');
    }
}
