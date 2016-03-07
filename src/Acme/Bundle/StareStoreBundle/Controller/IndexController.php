<?php
/**
* Controlador index para el bundle StareStore
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

/**
* Controlador index para el bundle StareStore
*
* @category Controller
* @package  StareStoreBundle/Controller
* @author   Autor original <dacaslles@github.com>
* @license  http://www.php.net/license/3_01.txt  PHP License 3.01
* @link     http://github.com/dacaslles/Analisis2_Proyecto
*/
class IndexController extends Controller
{

    /**
    * Accion para la ruta "/index"
    * 
    * @return html pagina de inicio
    */
    public function indexAction()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        
            

        if (isset($_SESSION["tipo"])) {

            $tipo = $_SESSION['tipo'];

            if ($tipo == 1) {

            } else if ($tipo == 2) {

            } else {
                $contenido = $this->renderView('AcmeBundleStareStoreBundle:home:home.user.html.twig'
                    ,['name' => $_SESSION['nombre']]);
                return new Response($contenido);
            }
            return new Response('<html><body>Hello usuario!</body></html>');

        } else {
            $contenido = $this->renderView('AcmeBundleStareStoreBundle:index.html.twig');
            //return $this->render('AcmeBundleStareStoreBundle:index.html.twig');
            return new Response($contenido);
        }
    }
}
