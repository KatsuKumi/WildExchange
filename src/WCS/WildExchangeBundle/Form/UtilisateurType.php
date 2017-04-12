<?php

namespace WCS\WildExchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\Query\ResultSetMapping;

class UtilisateurType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pseudo', TextType::class,array('attr' => array('placeholder' => 'Pseudo')))
            ->add('motDePasse', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password','attr' => array('placeholder' => 'Mot de passe')),
                'second_options' => array('label' => 'Repeat Password','attr' => array('placeholder' => 'Confirmer mot de passe')),
            ))
            ->add('email', EmailType::class,array('attr' => array('placeholder' => 'Email')))
            ->add('nom', TextType::class,array('attr' => array('placeholder' => 'Nom')))
            ->add('prenom', TextType::class,array('attr' => array('placeholder' => 'Prénom')))
            ->add('interet', TextType::class,array('attr' => array('placeholder' => 'Centre d\'intéret', "data-role" => "tagsinput", "value" => "Programmation, Chaussettes")))
            ->add('ecole', EntityType::class, array(
                'class' => 'WCSWildExchangeBundle:Ecole',
                'empty_value' => "Choisissez une école",
                'choice_label' => 'Ville',
                'expanded' => false,
                'multiple' => false
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCS\WildExchangeBundle\Entity\Utilisateur'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'wcs_wildexchangebundle_utilisateur';
    }


}
