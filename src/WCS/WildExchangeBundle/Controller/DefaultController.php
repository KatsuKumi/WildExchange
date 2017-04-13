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
        $repository = $this->getDoctrine()->getRepository('WCSWildExchangeBundle:Tags');
        $taglist = $repository->findAll();

        return $this->render('WCSWildExchangeBundle:Default:tags.html.twig',array(
            'attributes' => $taglist
        ));
    }
    public function loginAction()
    {

    }
    public function questionsAction($tag)
    {
        $em = $this->getDoctrine()->getManager();

        $tagobj = $em
            ->getRepository('WCSWildExchangeBundle:Tags')
            ->findByNom($tag);
        if (empty($tagobj)){
            $this->addFlash('connexion', "Ce tag n'existe pas !");
            return $this->redirectToRoute('tagspage');
        }
        $listquestion = $tagobj[0]->getQuestions();
        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig', array('tag' => $tag, 'questions'=> $listquestion));
    }
    public function ajoutAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:ajout.html.twig');
    }
    public function reponsesAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:reponses.html.twig');
    }
    public function dashboardAction()
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour accéder au Dashboard !");
            return $this->redirectToRoute('connectionpage');
        }
        return $this->render('WCSWildExchangeBundle:Default:dashboard.html.twig');
    }
    public function profilAction()
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour accéder à votre Profil !");
            return $this->redirectToRoute('connectionpage');
        }
        return $this->render('WCSWildExchangeBundle:Default:profil.html.twig');
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
