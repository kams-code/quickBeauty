<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Bridge\Doctrine\Form\Type\EntityType ;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\CallbackTransformer;


class EquipementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codeEqui',TextType::class,array('label' =>'code', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('designationEqui',TextType::class,array('label' =>'designation', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prixEqui',TextType::class,array('label' =>'prix', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('dateEqui',DateType::class,array('label' =>'date', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('descEqui',TextType::class,array('label' =>'description', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('imageEqui', FileType::class, array('label' => 'Image'))
        ->add('fournisseur', EntityType::class, array(
            'class'         => 'AppBundle:Fournisseur',
            'choice_label'  => 'NomFour',
            'multiple'      => false,   
            'placeholder' => "Choisir un fournisseur" ,
            'label' => 'Fournisseur'                         
          ))
        ;

        $builder->get('codeEqui')
        ->addModelTransformer(new CallbackTransformer(
            function ($codeEquiAsArray) {
                // transform the array to a string
                return implode(', ', $codeEquiAsArray);
            },
            function ($codeEquiAsString) {
                // transform the string back to an array
                return explode(', ', $codeEquiAsString);
            }
        ))
    ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Equipement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_equipement';
    }


}
