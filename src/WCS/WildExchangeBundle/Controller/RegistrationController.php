<?php

namespace WCS\WildExchangeBundle\Controller;

use WCS\WildExchangeBundle\Form\UtilisateurType;
use WCS\WildExchangeBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    /*   Generation du formulaire d'inscription   */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$this->IsStrenghtEnought($user->getMotDePasse())){
                $passerror = "Le mot de passe doit contenir 6 charactères, 1 chiffre & 1 lettre minuscule !";

                return $this->render(
                    'WCSWildExchangeBundle:Default:inscription.html.twig',
                    array('form' => $form->createView(),
                        'error' => $passerror)
                );
            }
            else{
                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getMotDePasse());
                $user->setMotDePasse($password);
                $user->setDateInscription(new \DateTime());
                $em = $this->getDoctrine()->getManager();
                $rang = $em
                    ->getRepository('WCSWildExchangeBundle:Rang')
                    ->find(1);
                $user->setIDRang($rang);
                // 4) save the User!
                $user->setAvatarURL("avatar/avatar.png");
                $em->persist($user);
                $em->flush();


                $this->addFlash(
                    'inscriptionsuccess',
                    'Vous êtes bien inscrit !'
                );
                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:inscription.html.twig',
            array('form' => $form->createView(),
                'error' => null)
        );
    }
    /* Fonction de vérification de la force d'un mot de passe  */
    public static function IsStrenghtEnought($password){
        if(strlen($password) < 6){
            return false;
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            return false;
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            return false;
        } else {
            return true;
        }
    }
}