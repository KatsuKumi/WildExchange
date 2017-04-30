<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\WildExchangeBundle\Form\CommentaireType;
use WCS\WildExchangeBundle\Form\DocsType;
use WCS\WildExchangeBundle\Form\UtilisateurTypeAdmin;
use WCS\WildExchangeBundle\Form\QuestionsTypeAdmin;
use WCS\WildExchangeBundle\Form\ReponsesTypeAdmin;


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



    public function editreponseAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $reponse = $em
            ->getRepository('WCSWildExchangeBundle:Reponses')
            ->find($id);

        $form = $this->createForm(ReponsesTypeAdmin::class, $reponse);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reponse);
            $em->flush();
            return $this->redirectToRoute('admin_homepage');

        }

        return $this->render(
            'WCSWildExchangeBundle:Admin:editreponse.html.twig',
            array('form' => $form->createView(), 'reponse' => $reponse,
                'error' => null)
        );
    }
    public function editcommentAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $comment = $em
            ->getRepository('WCSWildExchangeBundle:Commentaire')
            ->find($id);

        $form = $this->createForm(CommentaireType::class, $comment);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('admin_homepage');

        }

        return $this->render(
            'WCSWildExchangeBundle:Admin:editcommentaire.html.twig',
            array('form' => $form->createView(), 'comment' => $comment,
                'error' => null)
        );
    }
    public function editdocAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();

        $docs = $em
            ->getRepository('WCSWildExchangeBundle:Docs')
            ->find($id);

        $form = $this->createForm(DocsType::class, $docs);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($docs);
            $em->flush();
            return $this->redirectToRoute('admin_homepage');

        }

        return $this->render(
            'WCSWildExchangeBundle:Admin:editdoc.html.twig',
            array('form' => $form->createView(), 'doc' => $docs,
                'error' => null)
        );
    }
}