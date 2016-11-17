<?php

namespace Project\MaderaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MaderaBundle:Default:index.html.twig');
    }
}
