<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /*   Redirect à la page /fr/ si aucun local envoyé   */
    public function RedirectAction(){

        return $this->redirectToRoute('homepage');
    }
    /*   Génération de la page d'acceuil   */
    public function indexAction(Request $request)
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
    /*   Génération de la page de tags   */
    public function tagsAction()
    {
        $repository = $this->getDoctrine()->getRepository('WCSWildExchangeBundle:Tags');
        $taglist = $repository->findAll();

        return $this->render('WCSWildExchangeBundle:Default:tags.html.twig',array(
            'attributes' => $taglist
        ));
    }
    /*   Fontion de déconnexion   */
    public function logoutAction()
    {
        $this->addFlash('warning', $this->get('translator')->trans('login_expired'));
        return $this->redirect($this->generateUrl('login'));
    }
    /*   Fontion de vérification des badges   */
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
    /*   Fontion de tri par Vote des questions   */
    public function sortbyVote($list){

        usort($list, function($a, $b) {
            return count($a->getVotes()->getValues()) - count($b->getVotes()->getValues());
        });
        $list = array_reverse($list);
        return $list;


    }
}
