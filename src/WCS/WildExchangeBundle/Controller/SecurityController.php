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
            $this->addFlash('connexion', "Bonjour ,".$usr->getPseudo()."!");
            return $this->redirectToRoute('wcs_wild_exchange_homepage');
        }
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error){
            $this->addFlash('connexion', str_replace("Invalid credentials.", "Pseudo ou mot de passe invalide.", $error->getMessageKey()));
        }
        return $this->render('WCSWildExchangeBundle:Default:connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $error,
        ));
    }

    public function loginAction(Request $request)
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        return $this->redirectToRoute('wcs_wild_exchange_homepage');

    }


    public function logout(Request $request)
    {
        return $this->redirectToRoute('wcs_wild_exchange_homepage');

    }

    public static function IsStrenghtEnought($password){
        if(strlen($password) < 8){
            return false;
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            return false;
            $passwordErr = "Your password must contain at least 1 number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            return false;
            $passwordErr = "Your password must contain at least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            return false;
            $passwordErr = "Your password must contain at least 1 Lowercase Letter!";
        } else {
            return true;
        }
    }
    public static function GetPasswordError($password){
        $passwordErr = "";
        if(strlen($password) < 8){
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
        return $passwordErr;

    }
}