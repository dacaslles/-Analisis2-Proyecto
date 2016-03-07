<?php

namespace Acme\Bundle\StareStoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\StareStoreBundle\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;


class RegisterController extends Controller
{
	public function registerAction()
    {
    	$contenido = $this->renderView('AcmeBundleStareStoreBundle:register.html.twig');
		return new Response($contenido);
    }

    public function userAction(Request $request)
    {
    	/*$usuario = new Usuario();
        $datos = array("usuario" => "nuevo usuario") ;
    	$form = $this->createFormBuilder($datos)
    		->add('nombre',TextType::class)
    		->add('apellido',TextType::class)
    		->add('correo',TextType::class)
    		->add('telefono',TextType::class)
    		->add('nacimiento',DateType::class)
    		->add('password',PasswordType::class)
    		->getForm();

    	$form->handleRequest($request);
        /*
    	if($form->isSubmitted() && $form->isValid()){
    		return new Response('<html><body>Submitted!</body></html>');
    	}
        */
        $usuario = new Usuario();

        $usuario->setNombre($request->request->get('nombre'));
        $usuario->setApellido($request->request->get('apellido'));
        $usuario->setCorreo($request->request->get('correo'));
        $usuario->setTelefono($request->request->get('telefono'));
        $usuario->setFechanacimiento(new \DateTime($request->request->get('nacimiento')));
        $usuario->setPassword($request->request->get('password'));
        $usuario->setIdTipousuario(3);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        return new Response('<html><body>Registro completado!</br> </body></html>');
    }
}
