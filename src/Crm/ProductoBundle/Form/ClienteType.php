<?php

namespace Crm\ProductoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo')
            ->add('nombre')
            ->add('email','email')
            ->add('telefono')
            ->add('celular')
            ->add('direccion')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Crm\ProductoBundle\Entity\Cliente'
        ));
    }

    public function getName()
    {
        return 'crm_productobundle_clientetype';
    }
}
