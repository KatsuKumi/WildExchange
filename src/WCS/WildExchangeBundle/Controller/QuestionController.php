<?php

namespace WCS\WildExchangeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WCS\WildExchangeBundle\Entity\Questions;
use WCS\WildExchangeBundle\Entity\Vote;
use WCS\WildExchangeBundle\Form\QuestionsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class QuestionController extends Controller
{
    /**
     * @Route("/ajout", name="question_ajout")
     */
    /*   Génération de la page question   */
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
        $allquestion = $tagobj->

        getQuestions()->getValues();

        $sort = isset($_GET['sort']) ? $_GET['sort'] : null;
        switch ($sort) {
            case 'vote':
                $allquestion = $this->sortbyVote($allquestion);
                break;
            default:
                break;
        }
        $listquestion = array_slice($allquestion, $pagequerry, 5);
        $maxpage = ceil(count($allquestion)/5) == 0 ? 1 : ceil(count($allquestion)/5);
        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig', array('tag' => $tag, 'questions'=> $listquestion, 'maxpage' => $maxpage, 'actual'=> $page, 'q'=> null, 'sort' => $sort ));
    }
    /*   Génération de la page d'ajout de question avec création and handling de formulaire   */
    public function ajoutAction(Request $request, $tag)
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour ajouter une question !");
            return $this->redirectToRoute('connectionpage');
        }
        // 1) build the form
        $question = new Questions();
        $form = $this->createForm(QuestionsType::class, $question);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $question->setDate(new \DateTime());
            $usr= $this->get('security.context')->getToken()->getUser();
            $question->setCreateur($usr);
            $em = $this->getDoctrine()->getManager();
            $tagobj = $em
                ->getRepository('WCSWildExchangeBundle:Tags')
                ->findOneByNom($tag);
            $question->addTag($tagobj);
            $status = $em
                ->getRepository('WCSWildExchangeBundle:Status')
                ->find(1);
            $question->setStatus($status);
            $em->persist($question);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre question a bien été ajoutée !'
            );
            $this->checkBadges();

            return $this->redirectToRoute('questionpage', array('tag'=>$tag, 'page'=>    1));
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:ajout.html.twig',
            array('form' => $form->createView())
        );
    }
    /*   Fonction de vote   */
    public function VoteAction(Request $request)
    {

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('homepage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $this->checkBadges();
        if (isset($_POST['question_id'])){

            $question = $em
                ->getRepository('WCSWildExchangeBundle:Questions')
                ->find($_POST['question_id']);

            if (empty($question)){
                return $this->render('WCSWildExchangeBundle:Default:vote.html.twig', array('question'=> $question));
            }
            $votebool = $_POST['vote'] == 'plus' ? true : false;
            $existingvote = $em->getRepository('WCSWildExchangeBundle:Vote')
                ->findBy (['votant'=>$usr, 'question'=> $question], ['votant'=>'DESC'], 5, 0);
            if (empty($existingvote)){
                $vote = new Vote();
                $vote->setDate(new \DateTime());
                $vote->setVotant($usr);
                $vote->setValue($votebool);
                $vote->setQuestion($question);
                $em->persist($vote);
                $em->flush();
            }
            return $this->render('WCSWildExchangeBundle:Default:vote.html.twig', array('question'=> $question));
        }
        else if(isset($_POST['reponse_id'])){
            $reponse = $em
                ->getRepository('WCSWildExchangeBundle:Reponses')
                ->find($_POST['reponse_id']);

            if (empty($reponse)){
                return $this->render('WCSWildExchangeBundle:Default:vote.html.twig', array('question'=> $reponse));
            }

            $votebool = $_POST['vote'] == 'plus' ? true : false;

            $existingvote = $em->getRepository('WCSWildExchangeBundle:Vote')
                ->findBy (['votant'=>$usr, 'reponse'=> $reponse], ['votant'=>'DESC'], 5, 0);

            if (empty($existingvote)){
                $vote = new Vote();
                $vote->setDate(new \DateTime());
                $vote->setVotant($usr);
                $vote->setValue($votebool);
                $vote->setReponse($reponse);
                $em->persist($vote);
                $em->flush();
            }
            return $this->render('WCSWildExchangeBundle:Default:vote.html.twig', array('question'=> $reponse));

        }
    }
    /*   Fonction de recherche   */
    public function rechercheAction($page){

        if (empty($_GET['q'])){
            return $this->redirectToRoute('homepage');
        }
        $querryarray = explode(' ', $_GET['q']);
        $em = $this->getDoctrine()->getManager();
        $querryquestion = array();
        $questions = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->findAll();

        foreach ($questions as $question) {
            foreach ($querryarray as $querry) {
                if (strpos($question->getTitre(), $querry) !== false || strpos($question->getContenu(), $querry) !== false) {
                    if (!in_array($question, $querryquestion)) {
                        array_push($querryquestion, $question);
                    }
                }
            }
        }
        if (empty($querryquestion)){
            $this->addFlash(
                'erreurrecherche',
                "Aucun résultat pour la recherche : '{$_GET['q']}' !"
            );

            $referer = $this->getRequest()->headers->get('referer');

            return $this->redirect($referer);
        }

        $pagequerry = $page*5-5;
        $allquestion = $querryquestion;
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

        return $this->render('WCSWildExchangeBundle:Default:questions.html.twig', array('tag' => '', 'questions'=> $listquestion, 'maxpage' => $maxpage, 'actual'=> $page, 'q'=> str_replace(" ", "+", $_GET['q']), 'sort' => $sort));

    }
    /*   Tri par vote   */
    public function sortbyVote($list){

        usort($list, function($a, $b) {
            return count($a->getVotes()->getValues()) - count($b->getVotes()->getValues());
        });
        $list = array_reverse($list);
        return $list;


    }
    /*   Vérification des badges   */
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
    /*   Suppression de question   */
    public function deleteAction($id){
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $question = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);

        if (empty($question)){
            $this->addFlash('notuseroradmin', "La question n'existe pas !");
            return $this->redirectToRoute('tagspage');
        }

        if($question->getCreateur() == $usr || $usr->getRang()->getId() >= 2){
            $tag = $question->getTags()[0]->getNom();
            $em->remove($question);
            $em->flush();
            $this->addFlash(
                'deletesuccess',
                'La question a bien été supprimée !'
            );
            return $this->redirectToRoute('questionpage', array('tag'=>$tag, 'page'=>1));
        }
        else{
            $this->addFlash(
                'faildelete',
                'Vous ne pouvez pas supprimer cette question !'
            );
            $referer = $this->getRequest()->headers->get('referer');

            return $this->redirect($referer);
        }


    }
    /*   Fonction de résolution de question   */
    public function editstatusAction($id){

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $question = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);

        if (empty($question)){
            $this->addFlash('notuseroradmin', "La question n'existe pas !");
            return $this->redirectToRoute('tagspage');
        }
        if($question->getCreateur() == $usr || $usr->getRang()->getId() >= 2){
            $status = $em
                ->getRepository('WCSWildExchangeBundle:Status')
                ->find(2);
            $question->setStatus($status);
            $em->flush();
            $this->addFlash(
                'deletesuccess',
                'La question est à présent résolue !'
            );
            return $this->redirectToRoute('reponsepage', array('id'=> $question->getId()));
        }
        else{
            $this->addFlash(
                'faildelete',
                'Vous ne pouvez pas editer cette question !'
            );
            $referer = $this->getRequest()->headers->get('referer');
            return $this->redirect($referer);
        }


    }
    /*   Edition de question   */
    public function editAction($id){

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour editer une question !");
            return $this->redirectToRoute('connectionpage');
        }
        // 1) build the form
        $em = $this->getDoctrine()->getManager();
        $question = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);
        if (empty($question)){
            $this->addFlash('notuseroradmin', "La question n'existe pas/plus !");
            return $this->redirectToRoute('tagspage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        if(!$question->getCreateur() == $usr || !$usr->getRang()->getId() >= 2){
            $this->addFlash('notuseroradmin', "Vous ne pouvez pas editer cette question !");
            return $this->redirectToRoute('reponsepage', array('id'=>$question->getId()));
        }

        if (isset($_POST['titre']) && isset($_POST['contenu'])) {
            $this->checkBadges();
            $question->setTitre($_POST['titre']);
            $question->setContenu($_POST['contenu']);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre question a bien été éditée !'
            );

            return $this->redirectToRoute('reponsepage', array('id'=>$question->getId()));
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:editer.html.twig',
            array('question' => $question)
        );
    }
    /*   Fonction pour appliquer une solution à une question   */
    public function SetSolutionAction($questionid, $reponseid){

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $question = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($questionid);

        if (empty($question)){
            $this->addFlash('notuseroradmin', "La question n'existe pas/plus !");
            return $this->redirectToRoute('tagspage');
        }
        if($question->getCreateur() == $usr || $usr->getRang()->getId() >= 2){
            $status = $em
                ->getRepository('WCSWildExchangeBundle:Status')
                ->find(2);
            $question->setStatus($status);
            $reponse = $em
                ->getRepository('WCSWildExchangeBundle:Reponses')
                ->find($reponseid);
            $question->setSolution($reponse);
            $em->flush();
            $this->addFlash(
                'deletesuccess',
                'Question résolue !'
            );
            return $this->redirectToRoute('reponsepage', array('id'=> $question->getId()));
        }
        else{
            $this->addFlash(
                'faildelete',
                'Vous ne pouvez pas editer cette question !'
            );
            $referer = $this->getRequest()->headers->get('referer');
            return $this->redirect($referer);
        }
    }

}