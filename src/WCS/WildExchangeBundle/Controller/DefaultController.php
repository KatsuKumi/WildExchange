<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\SecurityContext;
use WCS\WildExchangeBundle\Entity\Task;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:index.html.twig');
    }
    public function connexionAction(Request $request)
    {

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $usr->getUsername();
            $this->addFlash('connexion', "Bonjour ,".$usr->getPseudo()."!");
            return $this->redirectToRoute('wcs_wild_exchange_homepage');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        return $this->render('WCSWildExchangeBundle:Default:connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));
    }
    public function inscriptionAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:inscription.html.twig');
    }
    public function tagsAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:tags.html.twig');
    }
    public function loginAction()
    {
        $this->addFlash('warning', $this->get('translator')->trans('login_expired'));
        return $this->redirect($this->generateUrl('connexion'));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        // The security layer will intercept this request, else redirect to login page
        $this->addFlash('warning', $this->get('translator')->trans('login_expired'));
        return $this->redirect($this->generateUrl('login'));
    }
}
