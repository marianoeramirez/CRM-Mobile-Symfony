<?php

namespace Crm\ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PedidoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('referencia')
            ->add('drogueria','choice',array(
            	'choices'   => array(
            		'N' => 'La Nena', 
            		'D' => 'Drolanca',
            		'C' => 'Cobeca',
            		'F' => 'Farvenca',
            	))
            )
            ->add('laboratorio','choice',array('choices'   => array('ELM' => 'Elmor', 'OFA' => 'Ofa'),))
            ->add('cliente')
            ->add('lineas','collection',array(
            	'type'=> new LineaType(),
            	'allow_add' => true,
				'prototype' => true,
				'by_reference' => false,
				'attr' => array('style' => 'display:none'),
				'options'=>array(
					'label'=>' ',
				)
            	)
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ProductoBundle\Entity\Pedido'
        ));
    }

    public function getName()
    {
        return 'crm_productobundle_pedidotype';
    }
}
