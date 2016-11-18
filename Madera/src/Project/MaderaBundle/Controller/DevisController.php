<?php

namespace Project\MaderaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DevisController extends Controller
{
    public function loginAction()
    {
        return $this->render('MaderaBundle:Devis:connexion.html.twig');
    }
}
