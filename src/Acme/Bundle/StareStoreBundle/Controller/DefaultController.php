<?php
/**
* Controlador default para el bundle StareStore
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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* Controlador default para el bundle StareStore
*
* @category Controller
* @package  StareStoreBundle/Controller
* @author   Autor original <dacaslles@github.com>
* @license  http://www.php.net/license/3_01.txt  PHP License 3.01
* @link     http://github.com/dacaslles/Analisis2_Proyecto
*/
class DefaultController extends Controller
{
    /**
     * Accion para la ruta "/index"
     *
     * @Route("/")
     * @return     html pagina de inicio
     */
    public function indexAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Recuperacion password')
            ->setTo('dacaslles@gmail.com')
            ->setFrom('starstore@mail.com')
            ->setBody('tu password es: 123');
        $this->get('mailer')->send($message);
        return $this->render('AcmeBundleStareStoreBundle:Default:index.html.twig');
    }

    public function mailAction()
    {
        $message = \Swift_Message::newInstance()
            ->setSubject('Recuperacion password')
            ->setTo('albertcaslles@hotmail.com')
            ->setFrom('starstore@mail.com')
            ->setBody('tu password es: 123');
        $this->get('mailer')->send($message);
        return $this->render('AcmeBundleStareStoreBundle:Default:index.html.twig');   
    }
}
