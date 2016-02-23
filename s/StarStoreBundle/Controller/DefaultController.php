<?php

namespace StarStoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('StarStoreBundle:Default:index.html.twig');
    }
}
