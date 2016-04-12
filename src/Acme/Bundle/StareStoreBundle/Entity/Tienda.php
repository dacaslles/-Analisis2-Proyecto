<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

/**
 * Tienda
 */
class Tienda
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
    private $eslogan;

    /**
     * @var string
     */
    private $mision;

    /**
     * @var string
     */
    private $vision;

    /**
     * @var string
     */
    private $acercade;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $portada;

    /**
     * @var int
     */
    private $tipo;

    /**
     * @var int
     */
    private $estado;

    /**
     * @var int
     */
    private $idAdministrador;

    /**
     * @var int
     */
    private $idCategoria;


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
     * @return Tienda
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
     * Set eslogan
     *
     * @param string $eslogan
     *
     * @return Tienda
     */
    public function setEslogan($eslogan)
    {
        $this->eslogan = $eslogan;

        return $this;
    }

    /**
     * Get eslogan
     *
     * @return string
     */
    public function getEslogan()
    {
        return $this->eslogan;
    }

    /**
     * Set mision
     *
     * @param string $mision
     *
     * @return Tienda
     */
    public function setMision($mision)
    {
        $this->mision = $mision;

        return $this;
    }

    /**
     * Get mision
     *
     * @return string
     */
    public function getMision()
    {
        return $this->mision;
    }

    /**
     * Set vision
     *
     * @param string $vision
     *
     * @return Tienda
     */
    public function setVision($vision)
    {
        $this->vision = $vision;

        return $this;
    }

    /**
     * Get vision
     *
     * @return string
     */
    public function getVision()
    {
        return $this->vision;
    }

    /**
     * Set acercade
     *
     * @param string $acercade
     *
     * @return Tienda
     */
    public function setAcercade($acercade)
    {
        $this->acercade = $acercade;

        return $this;
    }

    /**
     * Get acercade
     *
     * @return string
     */
    public function getAcercade()
    {
        return $this->acercade;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Tienda
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set portada
     *
     * @param string $portada
     *
     * @return Tienda
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return string
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Tienda
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Tienda
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idAdministrador
     *
     * @param integer $idAdministrador
     *
     * @return Tienda
     */
    public function setIdAdministrador($idAdministrador)
    {
        $this->idAdministrador = $idAdministrador;

        return $this;
    }

    /**
     * Get idAdministrador
     *
     * @return int
     */
    public function getIdAdministrador()
    {
        return $this->idAdministrador;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     *
     * @return Tienda
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return int
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}

