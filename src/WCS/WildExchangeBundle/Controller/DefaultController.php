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
        $refer = $this->getRequest()->headers->get('referer');
        if (strpos($refer, 'connexion') !== false && $this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Bonjour , ".$usr->getPseudo()."!");
        }


        return $this->render('WCSWildExchangeBundle:Default:index.html.twig');
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

    }
    public function questionsAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig');
    }
    public function ajoutAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:ajout.html.twig');
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
