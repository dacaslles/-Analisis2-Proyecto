<?php

namespace Acme\Bundle\StareStoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
	public function indexAction()
    {
		if(!isset($_SESSION)){
			session_start();
		}

		if(isset($_SESSION["tipo"])){
			return new Response('<html><body>Hello usuario!</body></html>');
		} else {
			$contenido = $this->renderView('AcmeBundleStareStoreBundle:index.html.twig');
//			return $this->render('AcmeBundleStareStoreBundle:index.html.twig');
			return new Response($contenido);
		}
    }
}
