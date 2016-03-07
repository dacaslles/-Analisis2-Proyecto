<?php

namespace Acme\Bundle\StareStoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Usuario")
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer",name="id_usuario")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $apellido;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $correo;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $movil;

    /**
     * @ORM\Column(type="string", length=45)
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @ORM\Column(type="integer")
     * @var int
     */
    private $idTipousuario;


    /**
     * Get id
     *
     * @return integer
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
     * @return Usuario
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return Usuario
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Usuario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set movil
     *
     * @param string $movil
     *
     * @return Usuario
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;

        return $this;
    }

    /**
     * Get movil
     *
     * @return string
     */
    public function getMovil()
    {
        return $this->movil;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Usuario
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set idTipousuario
     *
     * @param integer $idTipousuario
     *
     * @return Usuario
     */
    public function setIdTipousuario($idTipousuario)
    {
        $this->idTipousuario = $idTipousuario;

        return $this;
    }

    /**
     * Get idTipousuario
     *
     * @return integer
     */
    public function getIdTipousuario()
    {
        return $this->idTipousuario;
    }
}
