<?php

namespace Project\MaderaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function createProjectAction()
    {
        return $this->render('MaderaBundle:Devis:newProject.html.twig');
    }

    public function linkDevisAction()
    {
        return $this->render('MaderaBundle:Devis:devisProjet.html.twig');
    }
}
