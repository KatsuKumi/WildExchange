<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\WildExchangeBundle\Form\UtilisateurTypeAdmin;
use WCS\WildExchangeBundle\Form\QuestionsTypeAdmin;


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

    public function edituserAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $user = $em
            ->getRepository('WCSWildExchangeBundle:Utilisateur')
            ->find($id);

        $form = $this->createForm(UtilisateurTypeAdmin::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getMotDePasse());
                $user->setMotDePasse($password);
                $em->persist($user);
                $em->flush();
                return $this->redirectToRoute('admin_homepage');

        }

        return $this->render(
            'WCSWildExchangeBundle:Admin:edituser.html.twig',
            array('form' => $form->createView(), 'user' => $user,
                'error' => null)
        );
    }

    public function editquestionAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $question = $em
            ->getRepository('WCSWildExchangeBundle:Questions')
            ->find($id);

        $form = $this->createForm(QuestionsTypeAdmin::class, $question);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($question);
            $em->flush();
            return $this->redirectToRoute('admin_homepage');

        }

        return $this->render(
            'WCSWildExchangeBundle:Admin:editquestion.html.twig',
            array('form' => $form->createView(), 'question' => $question,
                'error' => null)
        );
    }
}