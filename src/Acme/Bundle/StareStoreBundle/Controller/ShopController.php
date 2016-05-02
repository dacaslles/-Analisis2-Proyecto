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

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\Bundle\StareStoreBundle\Entity\DetalleCarrito;
use Symfony\Component\HttpFoundation\Request;

/**
* Controlador default para el bundle StareStore
*
* @category Controller
* @package  StareStoreBundle/Controller
* @author   Autor original <dacaslles@github.com>
* @license  http://www.php.net/license/3_01.txt  PHP License 3.01
* @link     http://github.com/dacaslles/Analisis2_Proyecto
*/
class ShopController extends Controller
{

    public function showCartAction()
    {
        $detalle = $this->getDoctrine()->getManager()
                    ->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                    ->findByIDCarrito($_SESSION['id']);
        $carrito = $this->getDoctrine()->getManager()
                    ->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($_SESSION['id']);

        return $this->render('AcmeBundleStareStoreBundle:cart.html.twig',['details'=>$detalle,'cart'=>$carrito]);
    }

    /**
     * Accion para la ruta "/add-cart"
     *
     * @Route("/")
     * @return     actualizacion del carrito
     */
    public function addCartAction(Request $request)
    {
        $id_carrito = $_SESSION['id'];
        $id_producto = $request->request->get('id');
        $cantidad = $request->request->get('cantidad');
        $precio = $request->request->get('precio');

        $DetalleCarrito = new DetalleCarrito($id_producto,$id_carrito);
        $DetalleCarrito->setCantidad($cantidad);

        $em = $this->getDoctrine()->getManager();
        $em->persist($DetalleCarrito);
        $em->flush();

        $carrito = $em->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($id_carrito);
        $carrito->setTotal($carrito->getTotal()+($cantidad*$precio));
        $em->flush($carrito);        

        $total = $em->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                    ->createQueryBuilder('d')
                    ->select('COUNT(d.iDProducto)')
                    ->where('d.iDCarrito = :id')
                    ->setParameter('id',$id_carrito)
                    ->getQuery()
                    ->getSingleScalarResult();

        return $this->render('AcmeBundleStareStoreBundle:cart:cart.button.html.twig',
                ['total'=>$carrito->getTotal(),'cantidad'=>$total]);
    }

    public function showRowCartAction($id, $cantidad)
    {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('AcmeBundleStareStoreBundle:Producto')
                    ->findOneById($id);
        return $this->render('AcmeBundleStareStoreBundle:cart:row.cart.html.twig',['product'=>$producto,'quantity'=>$cantidad]);
    }

    public function shopAction()
    {
        $em = $this->getDoctrine()->getManager();
        $carrito = $em->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($_SESSION['id']);
        $detalles = $em->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                        ->findByIDCarrito($_SESSION['id']);

        $em->getConnection()->beginTransaction();
        try {

            foreach($detalles as $detalle) {
                $producto = $em->getRepository('AcmeBundleStareStoreBundle:Producto')
                            ->findOneById($detalle->getIDProducto());
                
                if($detalle->getCantidad() > $producto->getCantidad())
                    throw new Exception('cantidad no apropiada');

                $producto->setCantidad($producto->getCantidad() - $detalle->getCantidad());
                $em->flush();
                $em->remove($detalle);
                $em->flush();
            }
            $carrito->setTotal(0);
            $em->flush();
            $em->getConnection()->commit();
            return new Response('Exito');
        }catch(Exception $e) {
            $em->getConnection()->rollback();
            return new Response('algo fallo');
        }
    }

    public function buttonCartAction() {

        $em = $this->getDoctrine()->getManager();
        $carrito = $em->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($_SESSION['id']);

        $total = $em->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                    ->createQueryBuilder('d')
                    ->select('COUNT(d.iDProducto)')
                    ->where('d.iDCarrito = :id')
                    ->setParameter('id',$_SESSION['id'])
                    ->getQuery()
                    ->getSingleScalarResult();

        return $this->render('AcmeBundleStareStoreBundle:cart:cart.button.html.twig',
                ['total'=>$carrito->getTotal(),'cantidad'=>$total]);   
    }

}


