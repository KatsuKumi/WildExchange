<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\SecurityContext;
use WCS\WildExchangeBundle\Entity\Reponses;
use WCS\WildExchangeBundle\Form\ReponsesType;


class DefaultController extends Controller
{
    public function indexAction()
    {

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
    public function questionsAction($tag, $page)
    {
        $em = $this->getDoctrine()->getManager();

        $tagobj = $em
            ->getRepository('WCSWildExchangeBundle:Tags')
            ->findOneByNom($tag);
        if (empty($tagobj)){
            $this->addFlash('connexion', "Ce tag n'existe pas !");
            return $this->redirectToRoute('tagspage');
        }
        $pagequerry = $page*5-5;
        $allquestion = $tagobj->getQuestions()->getValues();
        $listquestion = array_slice($allquestion, $pagequerry, 5);
        $maxpage = round(count($allquestion)/5, 0, PHP_ROUND_HALF_UP);
        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig', array('tag' => $tag, 'questions'=> $listquestion, 'maxpage' => $maxpage, 'actual'=> $page, 'q'=> null ));
    }
    public function reponsesAction(Request $request, $id)
    {
        // 1) build the form
        $reponse = new Reponses();
        $form = $this->createForm(ReponsesType::class, $reponse);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setDate(new \DateTime());
            $usr= $this->get('security.context')->getToken()->getUser();
            $reponse->setCreateur($usr);
            $em = $this->getDoctrine()->getManager();
            $questionobj = $em
                ->getRepository('WCSWildExchangeBundle:Questions')
                ->find($id);
            $reponse->setQuestion($questionobj);
            $em->persist($reponse);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre réponse a bien été ajoutée !'
            );

            return $this->redirectToRoute('reponsepage', array('id'=>$id));
        }

        $em = $this->getDoctrine()->getManager();
        $questionobj = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);
        $listereponse = $questionobj->getReponses();

        return $this->render('WCSWildExchangeBundle:Default:reponses.html.twig', array('form'=>$form->createView(),
            'question'=>$questionobj, 'listereponse'=>$listereponse));
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
    public function profilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em
            ->getRepository('WCSWildExchangeBundle:Utilisateur')
            ->find($id);

        return $this->render('WCSWildExchangeBundle:Default:profil.html.twig', array('user' => $user));
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
