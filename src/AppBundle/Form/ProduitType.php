<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;

class ProduitType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('codePro',TextType::class,array('label' =>'code', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('designationPro',TextType::class,array('label' =>'designation', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('descPro',TextType::class,array('label' =>'description', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prixPro',TextType::class,array('label' =>'prix', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('imagePro',TextType::class,array('label' =>'image', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('datePro',TextType::class,array('label' =>'date', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('fournisseur',FournisseurType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Produit'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_produit';
    }


}
