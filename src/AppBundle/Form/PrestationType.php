<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PrestationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codePres',TextType::class,array('label' =>'code', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('designationPres',TextType::class,array('label' =>'designation', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('descPres',TextType::class,array('label' =>'description', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('montantPres',TextType::class,array('label' =>'montant', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('imagePres', FileType::class, array('label' => 'Image'))
        ->add('datePres',DateType::class,array('label' =>'date', 'attr'=>array('class'=>'form-horizontal') ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Prestation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_prestation';
    }


}
