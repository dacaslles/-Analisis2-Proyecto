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
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\StareStoreBundle\Entity\Usuario;
use Acme\Bundle\StareStoreBundle\Entity\Tienda;
use Acme\Bundle\StareStoreBundle\Entity\Producto;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;

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
        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:error:force.login.html.twig');
        }

        if($_SESSION['tipo'] != 1) {
            return $this->render('AcmeBundleStareStoreBundle:error:access.denied.html.twig');   
        }

        $_SESSION['nombre'] = 'SuperAdmin';

        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register:register.owner.html.twig'
            , ['name' => $_SESSION['nombre']]);
        return new Response($contenido);
    }    

    public function showStoreAction(Request $request)
    {
        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:error:force.login.html.twig');
        }

        if($_SESSION['tipo'] != 1) {
            return $this->render('AcmeBundleStareStoreBundle:error:access.denied.html.twig');   
        }

        $_SESSION['nombre'] = 'SuperAdmin';
        
        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register:register.store.html.twig'
            , ['name' => $_SESSION['nombre']]);
        return new Response($contenido);
    }

    public function showProductAction(Request $request)
    {
        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:error:force.login.html.twig');
        }

        if($_SESSION['tipo'] != 2) {
            return $this->render('AcmeBundleStareStoreBundle:error:access.denied.html.twig');   
        }
        
        $contenido = $this->renderView('AcmeBundleStareStoreBundle:register:register.product.html.twig');
        return new Response($contenido);
    }

    public function productAction(Request $request)
    {
        $producto = new Producto($parametros['codigo']);

        $parametros = $request->request->all();

        $producto->setId($parametros['codigo']);
        $producto->setDescripcion($parametros['descripcion']);
        $producto->setPrecio($parametros['precio']);
        $producto->setHabilitado(1);
        $producto->setCantidad($parametros['cantidad']);
        $producto->setNombre($parametros['nombre']);
        $producto->setIdTienda($parametros['tienda']);
        $producto->setIdCategoriaproducto($parametros['categoria']);
        $tienda = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Tienda')
            ->findOneById($parametros['tienda']);
        $rutaImagen = '/var/www/html/Analisis2_Proyecto/web/image/stores/'.$tienda->getNombre();
        $nombre = $parametros['codigo'].'.jpg';
        $producto->setImagen('image/stores/'.$tienda->getNombre().'/'.$nombre);

        $em = $this->getDoctrine()->getManager();
        $em->persist($producto);
        $em->flush();

        $request->files->get('imagen')->move($rutaImagen,$nombre);

        return new Response('producto registrado');

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
                        <a href="http://localhost/Analisis2_Proyecto/web/app_dev.php/index2">regresar</a>
                        </body></html>');
    }


    public function storeAction(Request $request)
    {

        $tienda = new Tienda();
        $parametros = $request->request->all();

        $tienda->setNombre($parametros['nombre']);
        $tienda->setEslogan($parametros['eslogan']);
        $tienda->setMision($parametros['mision']);
        $tienda->setVision($parametros['vision']);
        $tienda->setAcercade($parametros['acercade']);
        $rutaLogo = '/var/www/html/Analisis2_Proyecto/web/image/stores/'.$tienda->getNombre();
        $nombreLogo = 'logo'.$tienda->getNombre().'.jpg';
        $tienda->setLogo('image/stores/'.$tienda->getNombre().'/'.$nombreLogo);
        $rutaPortada = '/var/www/html/Analisis2_Proyecto/web/image/stores/'.$tienda->getNombre();
        $nombrePortada = 'portada'.$tienda->getNombre().'.jpg';
        $tienda->setPortada('image/stores/'.$tienda->getNombre().'/'.$nombrePortada);
        $tienda->setTipo(1);
        $tienda->setEstado(1);
        $tienda->setIdAdministrador($parametros['administrador']);
        $tienda->setIdCategoria($parametros['categoria']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($tienda);
        $em->flush();

        $request->files->get('logo')->move($rutaLogo,$nombreLogo);
        $request->files->get('portada')->move($rutaPortada,$nombrePortada);

        return new Response('tienda registrada ');

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
            $_SESSION['id'] = $usuario->getId();

            return $this->redirectToRoute('index2');

        } else {
            $body = '<html><body>usuario o password incorrecto</br>
                    <a href="http://localhost/Analisis2_Proyecto/web/app_dev.php/login">regresar</a>
                    </body></html>';
            return new Response($body);
        }

        
    }

    public function logoutAction(Request $request)
    {
        if(isset($_SESSION)){
            session_destroy();
            unset($_SESSION);
         }

        return $this->redirectToRoute('index2');
    }
}