<?php
/**
* Controlador register para el bundle StareStore
*
* PHP version 5.6
*
* @category Controller
* @package  StareStoreBundle/Controller
* @author   Autor original <dacaslles@github.com>
* @license  http://www.php.net/license/3_01.txt  PHP License 3.01
* @link     http://github.com/dacaslles/Analisis2_Proyecto
*/
namespace Acme\Bundle\StareStoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\StareStoreBundle\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
* Controlador register para el bundle StareStore
*
* PHP version 5.6
*
* @category Controller
* @package  StareStoreBundle/Controller
* @author   Autor original <dacaslles@github.com>
* @license  http://www.php.net/license/3_01.txt  PHP License 3.01
* @link     http://github.com/dacaslles/Analisis2_Proyecto
*/
class RegisterController extends Controller
{
    /**
    * Muestra la pagina de registro para el usuario
    *
    * @return html formulario de registro para usuario
    */
    public function showUserAction()
    {
        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register.html.twig');
        return new Response($contenido);
    }


    /**
    * Muestra la pagina de registro para los administradores
    *
    * @return html formulario de registro para un administrador
    */
    public function showOwnerAction()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['nombre'] = 'SuperAdmin';

        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register:register.owner.html.twig'
            , ['name' => $_SESSION['nombre']]);
        return new Response($contenido);
    }    

    public function showStoreAction(Request $request)
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['nombre'] = 'SuperAdmin';
        
        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register:register.store.html.twig'
            , ['name' => $_SESSION['nombre']]);
        return new Response($contenido);
    }
    
    /**
    * Agrega un nuevo usuario a la BD
    * 
    * @param request $request Contiene el request POST 
    *
    * @return html pagina de confirmacion para el sign in
    */
    public function userAction(Request $request)
    {
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


    /**
    * Agrega un nuevo administrador a la BD
    * 
    * @param request $request Contiene el request POST 
    *
    * @return html pagina de confirmacion
    */
    public function ownerAction(Request $request)
    {
        $usuario = new Usuario();

        $usuario->setNombre($request->request->get('nombre'));
        $usuario->setApellido($request->request->get('apellido'));
        $usuario->setCorreo($request->request->get('correo'));
        $usuario->setTelefono($request->request->get('telefono'));
        $usuario->setMovil($request->request->get('movil'));
        $usuario->setFechanacimiento(new \DateTime($request->request->get('nacimiento')));
        $usuario->setPassword($request->request->get('password'));
        $usuario->setIdTipousuario(2);

        $em = $this->getDoctrine()->getManager();
        $em->persist($usuario);
        $em->flush();

        return new Response('<html><body>Registro completado!</br> 
                        <a href="http://localhost/Analisis2_Proyecto/web/app_dev.php/index">regresar</a>
                        </body></html>');
    }


    /**
    * Login del sitio web
     *
    * @return html pagina para login
    */
    public function showloginAction()
    {
        $contenido = $this->renderView('AcmeBundleStareStoreBundle:login.html.twig');
        return new Response($contenido);
        
    }

    /**
    * Proceso del login del sitio web
    * 
    * @param request $request Contiene el request POST 
    *
    * @return html pagina de inicio segun tipo de usuario
    */
    public function loginAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Usuario');

        $usuario = $repository->findOneByCorreo($request->request->get('correo'));

        if ($usuario->getPassword() == $request->request->get('password')) {

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['tipo'] = $usuario->getIdTipousuario();
            $_SESSION['nombre'] = $usuario->getNombre();

            return $this->redirectToRoute('index');

        } else {
            $body = '<html><body>usuario o password incorrecto</br>
                    <a href="http://localhost/Analisis2_Proyecto/web/app_dev.php/login">regresar</a>
                    </body></html>';
            return new Response($body);
        }

        
    }
}