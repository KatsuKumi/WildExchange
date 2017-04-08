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
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            try {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getMotDePasse());
            $user->setMotDePasse($password);
            $user->setDateInscription(new \DateTime());
            $user->setIDRang(1);
            // 4) save the User!
            $ecoleobj = $user->getIDEcole();
            $user->setIDEcole($ecoleobj->getID());
            $user->setAvatarURL("avatar/avatar.png");
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            $this->addFlash(
                'inscriptionsuccess',
                'Vous êtes bien inscrit !'
            );
            return $this->redirectToRoute('wcs_wild_exchange_homepage');
            }
            catch(\Exception $e) {
                $this->addFlash(
                    'inscriptionsuccess',
                    'Déjà inscrit !'
                );
                return $this->redirectToRoute('inscriptionpage');
            }
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:inscription.html.twig',
            array('form' => $form->createView())
        );
    }
}