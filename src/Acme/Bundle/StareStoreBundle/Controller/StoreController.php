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
class StoreController extends Controller
{
    /**
     * Accion para la ruta "/index"
     *
     * @Route("/")
     * @return     html pagina de inicio
     */
    public function showMainAction($id)
    {
        $categorias = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:CategoriaTienda')->findAll();
        $categoriasP = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:CategoriaProducto')
                            ->createQueryBuilder('c')
                            ->where('c.idTienda = :id')
                            ->setParameter('id',$id)
                            ->getQuery()
                            ->getResult();
        $tienda = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Tienda')->findOneById($id);
        return $this->render('AcmeBundleStareStoreBundle:home:home.store.html.twig',
            ['name' => 'usuario','categories'=>$categorias,'categoriesP'=>$categoriasP,'store'=>$tienda]);
    }

    public function showCategoryAction($id)
    {
        $categorias = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:CategoriaTienda')->findAll();
        $categoria = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:CategoriaProducto')->findOneById($id);
        $productos = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Producto')
                            ->createQueryBuilder('p')
                            ->where('p.idCategoriaproducto = :id')
                            ->setParameter('id',$id)
                            ->getQuery()
                            ->getResult();
        $tienda = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Tienda')
                    ->findOneById($categoria->getIdTienda());
        return $this->render('AcmeBundleStareStoreBundle:category.html.twig',
            ['name' => 'usuario','categories'=>$categorias,'products'=>$productos,'category'=>$categoria,'store'=>$tienda]);   
    }

    public function showProductAction($id)
    {
        $categorias = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:CategoriaTienda')->findAll();
        $producto = $this->getDoctrine()->getRepository('AcmeBundleStareStoreBundle:Producto')->findOneById($id);
        if(is_array($producto))
            $valor = 'true';
        else
            $valor = 'false';
        return $this->render('AcmeBundleStareStoreBundle:product.html.twig',
            ['name' => $valor,'categories'=>$categorias,'product'=>$producto]);
    }
}
