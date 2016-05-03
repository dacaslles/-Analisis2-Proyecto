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
//use soap\nusoap;

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
        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:error:force.login.html.twig');
        }

        if($_SESSION['tipo'] != 3) {
            return $this->render('AcmeBundleStareStoreBundle:error:access.denied.html.twig');   
        }

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

        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:cart:empty.button.html.twig');
        }

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
        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:error:force.login.html.twig');
        }

        if($_SESSION['tipo'] != 3) {
            return $this->render('AcmeBundleStareStoreBundle:error:access.denied.html.twig');   
        }

        $em = $this->getDoctrine()->getManager();
        $carrito = $em->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($_SESSION['id']);
        $detalles = $em->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                        ->findByIDCarrito($_SESSION['id']);

        /*
        require_once 'nusoap.php';
        $cliente = new nusoap_client('http://localhost/credit_card_service/creditcard.php');
        $error = $cliente->getError();

        if($error) {
            return $this->render('AcmeBundleStareStoreBundle:error:error.html.twig',
                ['message'=>$error]);
        }

        $result = $cliente->call('confirm', array('card' => '123', 'quantity' => $carrito->getTotal()));

        if($cliente->fault) {
            return $this->render('AcmeBundleStareStoreBundle:error:error.html.twig',
                ['message'=>$result]);   
        } else {
            $error = $cliente->getError();
            if($error) {
                return $this->render('AcmeBundleStareStoreBundle:error:error.html.twig',
                ['message'=>$error]);
            } else if($result == 'denied'){
                return $this->render('AcmeBundleStareStoreBundle:error:error.html.twig',
                ['message'=>'tarjeta no aceptada']);
            }
        }
        */

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
            return $this->render('AcmeBundleStareStoreBundle:cart:success.html.twig');
        }catch(Exception $e) {
            $em->getConnection()->rollback();
            return new Response('algo fallo');
        }
    }

    public function buttonCartAction() {

        if (!isset($_SESSION['id'])) {
            return $this->render('AcmeBundleStareStoreBundle:cart:empty.button.html.twig');
        }


        $em = $this->getDoctrine()->getManager();
        $carrito = $em->getRepository('AcmeBundleStareStoreBundle:Carrito')
                    ->findOneById($_SESSION['id']);

        $total = $em->getRepository('AcmeBundleStareStoreBundle:DetalleCarrito')
                    ->createQueryBuilder('d')
                    ->select('SUM(d.cantidad)')
                    ->where('d.iDCarrito = :id')
                    ->setParameter('id',$_SESSION['id'])
                    ->getQuery()
                    ->getSingleScalarResult();

        if($total == 0)
            return $this->render('AcmeBundleStareStoreBundle:cart:empty.button.html.twig');
        else
            return $this->render('AcmeBundleStareStoreBundle:cart:cart.button.html.twig',
                ['total'=>$carrito->getTotal(),'cantidad'=>$total]);   
    }

}


