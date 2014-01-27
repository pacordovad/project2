<?php

namespace Petit\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PetType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('namePet')
            ->add('birthdayPet')
            ->add('picture')
            ->add('code')
            ->add('peculiarity')
            ->add('idRace')
            ->add('idPerson')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Petit\BackBundle\Entity\Pet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'petit_backbundle_pet';
    }
}
