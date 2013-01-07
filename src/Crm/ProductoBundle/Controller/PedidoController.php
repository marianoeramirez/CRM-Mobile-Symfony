<?php

namespace Crm\ProductoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crm\ProductoBundle\Entity\Pedido;
use Crm\ProductoBundle\Entity\Linea;
use Crm\ProductoBundle\Form\PedidoType;

/**
 * Pedido controller.
 *
 */
class PedidoController extends Controller
{
    /**
     * Lists all Pedido entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CrmProductoBundle:Pedido')->findAll();

        return $this->render('CrmProductoBundle:Pedido:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Pedido entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CrmProductoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CrmProductoBundle:Pedido:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Pedido entity.
     *
     */
    public function newAction()
    {
        $entity = new Pedido();
        $form   = $this->createForm(new PedidoType(), $entity);

        $em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT p FROM CrmProductoBundle:Producto p');
		$productos = $query->getArrayResult();
		$result = array();
        foreach($productos as $value){
        	$result[$value['id']] = $value;
        }
        
        return $this->render('CrmProductoBundle:Pedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'productos'=>$result,
        ));
    }
    /**
     * Creates a new Pedido entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Pedido();
        $form = $this->createForm(new PedidoType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
			foreach($form->get('lineas') as $linea_form) {
				$linea = $linea_form->getData();
				$linea->setPedido($entity);
				$em->persist($linea);
			}
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pedido'));
        }

        return $this->render('CrmProductoBundle:Pedido:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pedido entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CrmProductoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se puede conseguir el pedido.');
        }

        $editForm = $this->createForm(new PedidoType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT p FROM CrmProductoBundle:Producto p');
		$productos = $query->getArrayResult();
		$result = array();
        foreach($productos as $value){
        	$result[$value['id']] = $value;
        }
        return $this->render('CrmProductoBundle:Pedido:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'productos'=>$result,
        ));
    }

    /**
     * Edits an existing Pedido entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CrmProductoBundle:Pedido')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pedido entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PedidoType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
			foreach($editForm->get('lineas') as $linea_form) {
				$linea = $linea_form->getData();
				$linea->setPedido($entity);
				$em->persist($linea);
			}
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pedido'));
        }

        return $this->render('CrmProductoBundle:Pedido:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Pedido entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CrmProductoBundle:Pedido')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pedido entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pedido'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
