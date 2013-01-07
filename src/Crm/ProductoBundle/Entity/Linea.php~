<?php

namespace Crm\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crm\ProductoBundle\Entity\Linea
 */
class Linea
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $cantidad
     */
    private $cantidad;


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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Linea
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
    /**
     * @var Crm\ProductoBundle\Entity\Pedido
     */
    private $pedido;

    /**
     * @var Crm\ProductoBundle\Entity\Producto
     */
    private $producto;


    /**
     * Set pedido
     *
     * @param Crm\ProductoBundle\Entity\Pedido $pedido
     * @return Linea
     */
    public function setPedido(\Crm\ProductoBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;
    
        return $this;
    }

    /**
     * Get pedido
     *
     * @return Crm\ProductoBundle\Entity\Pedido 
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * Set producto
     *
     * @param Crm\ProductoBundle\Entity\Producto $producto
     * @return Linea
     */
    public function setProducto(\Crm\ProductoBundle\Entity\Producto $producto = null)
    {
        $this->producto = $producto;
    
        return $this;
    }

    /**
     * Get producto
     *
     * @return Crm\ProductoBundle\Entity\Producto 
     */
    public function getProducto()
    {
        return $this->producto;
    }
}