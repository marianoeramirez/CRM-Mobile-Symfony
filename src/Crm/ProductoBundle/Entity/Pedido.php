<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Crm\ProductoBundle\Entity\Pedido
 */
class Pedido
{
   /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $referencia
     */
    private $referencia;

	/**
	 * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="Pedido")
	 * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
	 */
	protected $cliente;

    /**
     * @var integer $drogueria
     */
    private $drogueria;

    /**
     * @var string $laboratorio
     */
    private $laboratorio;
	public function __construct()
	{
		$this->lineas = new ArrayCollection();
	}


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
     * Set referencia
     *
     * @param string $referencia
     * @return Pedido
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    
        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     * @return Pedido
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return string 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set drogueria
     *
     * @param integer $drogueria
     * @return Pedido
     */
    public function setDrogueria($drogueria)
    {
        $this->drogueria = $drogueria;
    
        return $this;
    }

    /**
     * Get drogueria
     *
     * @return integer 
     */
    public function getDrogueria()
    {
        return $this->drogueria;
    }

    /**
     * Set laboratorio
     *
     * @param string $laboratorio
     * @return Pedido
     */
    public function setLaboratorio($laboratorio)
    {
        $this->laboratorio = $laboratorio;
    
        return $this;
    }

    /**
     * Get laboratorio
     *
     * @return string 
     */
    public function getLaboratorio()
    {
        return $this->laboratorio;
    }

    /**
     * Add cliente
     *
     * @param Crm\ProductoBundle\Entity\Cliente $cliente
     * @return Pedido
     */
    public function addCliente(\Crm\ProductoBundle\Entity\Cliente $cliente)
    {
        $this->cliente[] = $cliente;
    
        return $this;
    }

    /**
     * Remove cliente
     *
     * @param Crm\ProductoBundle\Entity\Cliente $cliente
     */
    public function removeCliente(\Crm\ProductoBundle\Entity\Cliente $cliente)
    {
        $this->cliente->removeElement($cliente);
    }
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $lineas;


    /**
     * Add lineas
     *
     * @param Crm\ProductoBundle\Entity\Linea $lineas
     * @return Pedido
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
