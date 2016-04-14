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
class CategoryController extends Controller
{
    /**
     * Accion para la ruta "/index"
     *
     * @Route("/")
     * @return     html pagina de inicio
     */
    public function tiendaCategoriaAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Tienda');
        $query = $repository->createQueryBuilder('t')
                            ->where('t.idCategoria = :id')
                            ->setParameter('id',$id)
                            ->orderBy('t.nombre','ASC')
                            ->getQuery();
        $tiendas = $query->getResult();

        return $this->render('AcmeBundleStareStoreBundle:container:store.category.html.twig',array('stores' => $tiendas));
    }


    public function categoriasAction()
    {
        $categorias = $this->getDoctrine()
            ->getRepository('AcmeBundleStareStoreBundle:CategoriaTienda')->findAll();

        return $this->render('AcmeBundleStareStoreBundle:container:container.html.twig',
                ['categories'=>$categorias]);   

    }
}