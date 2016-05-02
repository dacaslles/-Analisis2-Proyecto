<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

/**
 * DetalleCarrito
 */
class DetalleCarrito
{
    /**
     * @var int
     */
    private $iDProducto;

    /**
     * @var int
     */
    private $iDCarrito;

    /**
     * @var int
     */
    private $cantidad;


    public function __construct($idP, $idC)
    {
        $this->iDProducto = $idP;
        $this->iDCarrito = $idC;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set iDProducto
     *
     * @param integer $iDProducto
     *
     * @return DetalleCarrito
     */
    public function setIDProducto($iDProducto)
    {
        $this->iDProducto = $iDProducto;

        return $this;
    }

    /**
     * Get iDProducto
     *
     * @return int
     */
    public function getIDProducto()
    {
        return $this->iDProducto;
    }

    /**
     * Set iDCarrito
     *
     * @param integer $iDCarrito
     *
     * @return DetalleCarrito
     */
    public function setIDCarrito($iDCarrito)
    {
        $this->iDCarrito = $iDCarrito;

        return $this;
    }

    /**
     * Get iDCarrito
     *
     * @return int
     */
    public function getIDCarrito()
    {
        return $this->iDCarrito;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetalleCarrito
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}

