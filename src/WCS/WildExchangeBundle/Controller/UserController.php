<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{

    /*   Génération de la page dashboard   */
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
            if ($vote->getQuestion() && $vote->getQuestion()->getCreateur() == $usr){
                array_push($votetothisuser, $vote);
            }
        }
        $questionofthisuser = $usr->getQuestions();
        $allusedtag = array();
        foreach ($questionofthisuser as $question){
            array_push($allusedtag, $question->getTags()[0]->getNom());
        }
        $c = array_count_values($allusedtag);
        $mostusedtag = "Aucun";
        if (!empty($c)){
            $mostusedtag = array_search(max($c), $c);
        }



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

    /*   Handle de la modification de profil   */
    public function editprofilAction(){
        $postparams = $_POST;
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        if (!empty($_FILES['avatar']['name'])){
            $infosfiles = pathinfo($_FILES['avatar']['name']);
            $uploadDir = $this->container->getParameter('avatar_dir');
            $nom = "{$infosfiles['filename']}{$this->generateRandomString()}.{$infosfiles['extension']}";
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],"{$uploadDir}/$nom");
            $user->setAvatarurl("avatar/{$nom}");
        }
        $user->setEmail($_POST['email']);
        if (!empty($_POST['password'])){
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $_POST['password']);
            $user->setMotdePasse($encoded);
        }
        $user->setGithub($_POST['GitHub']);
        $user->setTwitter($_POST['Twitter']);
        $user->setFacebook($_POST['Facebook']);
        $linkedin = str_replace('http:', '', str_replace('/', '', str_replace('https://', '' ,str_replace('www.linkedin.com/in/','',$_POST['LinkedLn']))));
        $user->setLinkedin($linkedin);
        $em->flush();
        $this->addFlash(
            'ajoutsuccess',
            'Vos modifications ont bien été prises en compte !'
        );
        return $this->redirectToRoute('dashboardpage');


    }

    /*   Génération de la page Profil   */
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

    /*   Fontion de tri par Vote des questions   */
    public function sortbyVote($list){

        usort($list, function($a, $b) {
            return count($a->getVotes()->getValues()) - count($b->getVotes()->getValues());
        });
        $list = array_reverse($list);
        return $list;


    }
}