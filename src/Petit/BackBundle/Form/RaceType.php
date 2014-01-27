<?php

namespace Petit\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RaceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameRace','text',array('label'=>"Nombre",'required'=>true))
            ->add('pictureRace','file',array('label' => "Foto", "required" => true))
            ->add('idAnimal','entity',array('label'=>'Animal','class'=>'PetitBackBundle:Animal','required'=>true,'empty_data'=>false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Petit\BackBundle\Entity\Race'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'petit_backbundle_race';
    }
}
