<?php

namespace WCS\WildExchangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class UtilisateursType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('pseudo')
            ->add('motDePasse', PasswordType::class)
            ->add('email', EmailType::class)
            ->add('nom')
            ->add('prenom')
            ->add('interet')
            ->add('github')
            ->add('facebook')
            ->add('twitter')
            ->add('linkedin')
            ->add('avatarurl')
            ->add('dateInscription')
            ->add('dateConnexion')
            ->add('rang', EntityType::class, array(
                'class' => 'WCSWildExchangeBundle:Rang',
                'choice_label' => 'nom',
                'expanded' => false,
                'multiple' => false
            ))
            ->add('ecole', EntityType::class, array(
                'class' => 'WCSWildExchangeBundle:Ecole',
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
