<?php

namespace Crm\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	//$em = $this->getDoctrine()->getEntityManager();
		//$query = $em->createQuery('SELECT p FROM CrmProductoBundle:Pedido p group by');
		//($pedidos = $query->getArrayResult();
        return $this->render('CrmProductoBundle:Default:index.html.twig');
    }
    public function mapaAction(){
    	$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT p FROM CrmProductoBundle:Cliente p where p.lat IS NOT NULL');
		$mapa = $query->getArrayResult();
    	return $this->render('CrmProductoBundle:Default:mapa.html.twig',array(
    		'mapa'=>$mapa
    	));
    }
}
