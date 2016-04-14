<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

/**
 * Producto
 */
class Producto
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var int
     */
    private $habilitado;

    /**
     * @var int
     */
    private $cantidad;

    /**
     * @var int
     */
    private $idCategoriaproducto;

    /**
     * @var int
     */
    private $idTienda;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set habilitado
     *
     * @param integer $habilitado
     *
     * @return Producto
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return int
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Producto
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

    /**
     * Set idCategoriaproducto
     *
     * @param integer $idCategoriaproducto
     *
     * @return Producto
     */
    public function setIdCategoriaproducto($idCategoriaproducto)
    {
        $this->idCategoriaproducto = $idCategoriaproducto;

        return $this;
    }

    /**
     * Get idCategoriaproducto
     *
     * @return int
     */
    public function getIdCategoriaproducto()
    {
        return $this->idCategoriaproducto;
    }

    /**
     * Set idTienda
     *
     * @param integer $idTienda
     *
     * @return Producto
     */
    public function setIdTienda($idTienda)
    {
        $this->idTienda = $idTienda;

        return $this;
    }

    /**
     * Get idTienda
     *
     * @return int
     */
    public function getIdTienda()
    {
        return $this->idTienda;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }    
}

