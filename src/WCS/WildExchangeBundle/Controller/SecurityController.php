<?php
namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WCS\WildExchangeBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function connexionAction(Request $request)
    {

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Bonjour, ".$usr->getPseudo()." ! 😉 ");
            return $this->redirectToRoute('homepage');
        }
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error){
            $this->addFlash('connexion', str_replace("Invalid credentials.", "Pseudo ou mot de passe invalides.", $error->getMessageKey()));
        }
        return $this->render('WCSWildExchangeBundle:Default:connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $error,
        ));
    }

    public function loginAction(Request $request)
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        return $this->redirectToRoute('homepage');

    }

    public function logout(Request $request)
    {
        return $this->redirectToRoute('homepage');

    }

}