<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomCli',TextType::class,array('label' =>'nom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('prenomCli',TextType::class,array('label' =>'prenom', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('adresseCli',TextType::class,array('label' =>'adresse', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('villeCli',TextType::class,array('label' =>'ville', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('telCli',TextType::class,array('label' =>'telephone', 'attr'=>array('class'=>'form-horizontal') ))
        ->add('emailCli', EmailType::class, array('label'=>'email','attr' => array('placeholder' => 'Your email address'),
        'constraints' => array(
            new NotBlank(array("message" => "Please provide a valid email")),
            new Email(array("message" => "Your email doesn't seems to be valid")),
        )
    ))
        ->add('dateCli',TextType::class,array('label' =>'date creation', 'attr'=>array('class'=>'form-horizontal') ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_client';
    }


}
