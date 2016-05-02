<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

/**
 * Carrito
 */
class Carrito
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $total;

    /**
     * @var int
     */
    private $iDUsuario;

    public function __construct($id)
    {
        $this->id = $id;
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
     * Set total
     *
     * @param float $total
     *
     * @return Carrito
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /** 
     * Set iDUsuario
     *
     * @param integer $iDUsuario
     *
     * @return Carrito
     */
    public function setIDUsuario($iDUsuario)
    {
        $this->iDUsuario = $iDUsuario;

        return $this;
    }

    /**
     * Get iDUsuario
     *
     * @return int
     */
    public function getIDUsuario()
    {
        return $this->iDUsuario;
    }
}

