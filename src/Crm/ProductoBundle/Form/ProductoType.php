<?php

namespace Crm\ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('nombre')
            ->add('precio')
            ->add('descripcion','text',array('required'=>false))
            ->add('laboratorio', 'choice',array(
				'choices'   => array('ELM' => 'Elmor', 'OFA' => 'Ofa'),
				
			))
            ->add('regulado','checkbox',array('required'=>false))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ProductoBundle\Entity\Producto'
        ));
    }

    public function getName()
    {
        return 'crm_productobundle_productotype';
    }
}
