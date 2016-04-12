<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

/**
 * CategoriaProducto
 */
class CategoriaProducto
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var int
     */
    private $idTienda;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CategoriaProducto
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CategoriaProducto
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return CategoriaProducto
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
     * Set idTienda
     *
     * @param integer $idTienda
     *
     * @return CategoriaProducto
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
}

