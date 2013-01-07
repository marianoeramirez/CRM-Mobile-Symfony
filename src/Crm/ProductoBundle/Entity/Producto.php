<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Crm\ProductoBundle\Entity\Producto
 */
class Producto
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $codigo
     */
    private $codigo;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
	 * @ORM\Column(type="decimal", scale=2)
	 */
    private $precio;

    /**
     * @var string $descripcion
     */
    private $descripcion;

    /**
     * @var array $laboratorio
     */
    private $laboratorio;

    /**
     * @var array $regulado
     */
    private $regulado;


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
     * Set codigo
     *
     * @param string $codigo
     * @return Producto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
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

    /**
     * Set precio
     *
     * @param integer $precio
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
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
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
     * Set laboratorio
     *
     * @param array $laboratorio
     * @return Producto
     */
    public function setLaboratorio($laboratorio)
    {
        $this->laboratorio = $laboratorio;
    
        return $this;
    }

    /**
     * Get laboratorio
     *
     * @return array 
     */
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }

    /**
     * Set regulado
     *
     * @param array $regulado
     * @return Producto
     */
    public function setRegulado($regulado)
    {
        $this->regulado = $regulado;
    
        return $this;
    }

    /**
     * Get regulado
     *
     * @return array 
     */
    public function getRegulado()
    {
        return $this->regulado;
    }
    public function __toString(){
    	return "$this->codigo $this->nombre";
    }
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $lineas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lineas = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lineas
     *
     * @param Crm\ProductoBundle\Entity\Linea $lineas
     * @return Producto
     */
    public function addLinea(\Crm\ProductoBundle\Entity\Linea $lineas)
    {
        $this->lineas[] = $lineas;
    
        return $this;
    }

    /**
     * Remove lineas
     *
     * @param Crm\ProductoBundle\Entity\Linea $lineas
     */
    public function removeLinea(\Crm\ProductoBundle\Entity\Linea $lineas)
    {
        $this->lineas->removeElement($lineas);
    }

    /**
     * Get lineas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLineas()
    {
        return $this->lineas;
    }
}