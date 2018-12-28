<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonnelType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codePerso',TextType::class,array('label' =>'code', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('nomPerso',TextType::class,array('label' =>'nom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prenomPerso',TextType::class,array('label' =>'prenom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('adressePerso',TextType::class,array('label' =>'adresse', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('villePerso',TextType::class,array('label' =>'ville', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('telPerso',TextType::class,array('label' =>'numero de telephone', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('datePerso',TextType::class,array('label' =>'date de debut', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prestation',PrestationType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Personnel'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_personnel';
    }


}
