<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StaffController extends Controller
{
    public function indexAction(){

        $em = $this->getDoctrine()->getManager();
        $utilisateurs = $em
            ->getRepository('WCSWildExchangeBundle:Utilisateur')
            ->findAll();
        $commentaires = $em
            ->getRepository('WCSWildExchangeBundle:Commentaire')
            ->findAll();
        $questions = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->findAll();
        $reponses = $em
            ->getRepository('WCSWildExchangeBundle:Reponses')
            ->findAll();
        return $this->render('WCSWildExchangeBundle:Admin:index.html.twig', array('utilisateur' => $utilisateurs, 'commentaires' => $commentaires, 'questions' => $questions, 'reponses' => $reponses));
    }

}