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

        $em = $this->getDoctrine()->getManager();
        $questions = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->findAll();
        $questions = $this->sortbyVote($questions);
        $bestquestion = $questions[0];
        $questions = array_slice($questions, 1, 5);
        return $this->render('WCSWildExchangeBundle:Default:index.html.twig', array('questions'=>$questions, 'bestquestion' => $bestquestion));
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

        $sort = isset($_GET['sort']) ? $_GET['sort'] : null;
        switch ($sort) {
            case 'vote':
                $allquestion = $this->sortbyVote($allquestion);
                break;
            default:
                break;
        }
        $listquestion = array_slice($allquestion, $pagequerry, 5);
        $maxpage = ceil(count($allquestion)/5);
        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig', array('tag' => $tag, 'questions'=> $listquestion, 'maxpage' => $maxpage, 'actual'=> $page, 'q'=> null, 'sort' => $sort ));
    }
    public function sortbyVote($list){

        usort($list, function($a, $b) {
            return count($a->getVotes()->getValues()) < count($b->getVotes()->getValues()) ? -1 : 1;
        });
        $list = array_reverse($list);
        return $list;


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
            $this->checkBadges();

            return $this->redirectToRoute('reponsepage', array('id'=>$id));
        }

        $em = $this->getDoctrine()->getManager();
        $questionobj = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);
        if (empty($questionobj)){
            $this->addFlash(
                'noexistingquestion',
                "La question n'existe pas !"
            );
            return $this->redirectToRoute('tagspage');
        }
        $listereponse = $questionobj->getReponses();

        return $this->render('WCSWildExchangeBundle:Default:reponses.html.twig', array('form'=>$form->createView(),
            'question'=>$questionobj, 'listereponse'=>$listereponse));
    }
    public function dashboardAction()
    {
        $usr= $this->get('security.context')->getToken()->getUser();
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $this->addFlash('connexion', "Vous devez être connecté pour accéder au Dashboard !");
            return $this->redirectToRoute('connectionpage');
        }
        $em = $this->getDoctrine()->getManager();
        $votes = $em
            ->getRepository('WCSWildExchangeBundle:Vote')
            ->findAll();
        $votetothisuser = array();
        foreach ($votes as $vote){
            if ($vote->getQuestion()->getCreateur() == $usr){
                array_push($votetothisuser, $vote);
            }
        }
        $questionofthisuser = $usr->getQuestions();
        $allusedtag = array();
        foreach ($questionofthisuser as $question){
            array_push($allusedtag, $question->getTags()[0]->getNom());
        }
        $c = array_count_values($allusedtag);
        $mostusedtag = array_search(max($c), $c);


        $allquestions = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->findAll();

        $resolvedquestion = array();
        foreach ($allquestions as $question){
            if ($question->getSolution() && $usr == $question->getSolution()->getCreateur()){
                array_push($resolvedquestion, $question);
            }
        }

        return $this->render('WCSWildExchangeBundle:Default:dashboard.html.twig', array('voteusr' => $votetothisuser, 'mostusedtag' => $mostusedtag, 'resolvedquestion' => $resolvedquestion));
    }
    public function profilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em
            ->getRepository('WCSWildExchangeBundle:Utilisateur')
            ->find($id);
        $votes = $em
            ->getRepository('WCSWildExchangeBundle:Vote')
            ->findAll();
        $votetothisuser = array();
        foreach ($votes as $vote){
            if ($vote->getQuestion() && $vote->getQuestion()->getCreateur() == $user){
                array_push($votetothisuser, $vote);
            }
            else if (!empty($vote->getReponse()) && $vote->getReponse()->getCreateur() == $user){
                array_push($votetothisuser, $vote);
            }
        }
        $allaction = array_merge($user->getVotes()->getValues(), array_merge($user->getQuestions()->getValues(), $user->getReponses()->getValues()));
        usort($allaction, function($a, $b){
            $ad = $a->getDate();
            $bd = $b->getDate();

            if ($ad == $bd){
                return 0;
            }
            return $ad < $bd ? 1 : -1;

        });
        $allaction = array_slice($allaction, 0, 5);
        $topquestions = $this->sortbyVote(array_merge($user->getQuestions()->getValues(), $user->getReponses()->getValues()));

        return $this->render('WCSWildExchangeBundle:Default:profil.html.twig', array('user' => $user, 'votetothisuser' => $votetothisuser, 'topquestion' => $topquestions, 'recentaction' => $allaction));
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
    public function checkBadges(){
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $allbadge = $em
            ->getRepository('WCSWildExchangeBundle:Badge')
            ->findAll();

        foreach ($allbadge as $badge){

            if($badge->getMinquestion()){
                if (count($usr->getQuestions()) >= $badge->getMinquestion() )
                {
                    if (!in_array($badge, $usr->getBadges()->getValues())) {
                        $badge->addUtilisateur($usr);
                        $usr->addBadge($badge);
                        $em->persist($badge);
                        $em->persist($usr);
                    }
                }
            }
            else if ($badge->getMinreponse()){
                if (count($usr->getReponses()) >= $badge->getMinreponse() )
                {
                    if (!in_array($badge, $usr->getBadges()->getValues())) {
                        $badge->addUtilisateur($usr);
                        $usr->addBadge($badge);
                        $em->persist($badge);
                        $em->persist($usr);
                    }
                }
            }
            else if ($badge->getMinvote()){
                if (count($usr->getVotes()) >= $badge->getMinvote() )
                {
                    if (!in_array($badge, $usr->getBadges()->getValues())) {
                        $badge->addUtilisateur($usr);
                        $usr->addBadge($badge);
                        $em->persist($badge);
                        $em->persist($usr);
                    }

                }
            }
        }

        $em->flush();
    }
}
