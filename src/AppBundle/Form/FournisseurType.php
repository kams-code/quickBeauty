<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;

class FournisseurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomFour',TextType::class,array('label' =>'nom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prenomFour',TextType::class,array('label' =>'prenom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('adresseFour',TextType::class,array('label' =>'adresse', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('telFour',TextType::class,array('label' =>'numero de telephone', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('villeFour',TextType::class,array('label' =>'ville', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('emailFour', EmailType::class, array('label'=>'email','attr' => array('placeholder' => 'Your email address'),
        'constraints' => array(
            new NotBlank(array("message" => "Please provide a valid email")),
            new Email(array("message" => "Your email doesn't seems to be valid")),
        )
    ))
        ->add('dateFour',DateType::class,array('label' =>'date', 'attr'=>array('class'=>'form-horizontal') ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fournisseur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fournisseur';
    }


}
