<?php


namespace WCS\WildExchangeBundle\Form;

use WCS\WildExchangeBundle\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Pseudo'
                )))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email')))
            ->add('name', TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Nom'
                )))

            ->add('prenom', TextType::class,array(
                'attr' => array(
                    'placeholder' => 'Prenom'
                )))
            ->add('centre', TextType::class,array(
                'attr' => array(
                    'placeholder' => "Centre d'intéret"
                )))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password','attr' => array('placeholder' => 'Mot de passe')),
                'second_options' => array('label' => 'Repeat Password','attr' => array('placeholder' => 'Confirmer mot de passe')),
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}