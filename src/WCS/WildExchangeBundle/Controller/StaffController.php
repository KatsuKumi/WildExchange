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
        $docs = $em
            ->getRepository('WCSWildExchangeBundle:docs')
            ->findAll();
        $votes = $em
            ->getRepository('WCSWildExchangeBundle:Vote')
            ->findAll();

        return $this->render('WCSWildExchangeBundle:Admin:index.html.twig', array('utilisateur' => $utilisateurs, 'commentaires' => $commentaires, 'questions' => $questions, 'reponses' => $reponses, 'docs'=>$docs, 'votes'=>$votes));
    }
    public function deleteuserAction(){

        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Utilisateur')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }

    public function deletequestionAction(){

        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Questions')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }
    public function deletereponseAction(){

        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Reponses')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }
    public function deletecommentAction(){

        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Commentaire')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }
    public function deletedocAction(){

        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Docs')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }
    public function deletevoteAction(){
        $id = $_POST['id'];
        if (!empty($id)){
            $em = $this->getDoctrine()->getManager();
            $user = $em
                ->getRepository('WCSWildExchangeBundle:Docs')
                ->find($id);
            $em->remove($user);
            $em->flush();
        }

    }

    public function edituserAction($id){

        $em = $this->getDoctrine()->getManager();

        $user = $em
            ->getRepository('WCSWildExchangeBundle:Utilisateur')
            ->find($id);

        return $this->render('WCSWildExchangeBundle:Admin:edituser.html.twig', array('user'=>$user));

    }
}