<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\WildExchangeBundle\Entity\Commentaire;
use WCS\WildExchangeBundle\Entity\Reponses;
use WCS\WildExchangeBundle\Form\CommentaireType;
use WCS\WildExchangeBundle\Form\ReponsesType;


class ReponseController extends Controller
{

    /*   Génération de la page Profil  */
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

        $comment = new Commentaire();
        $commentform = $this->createForm(CommentaireType::class, $comment);

        // 2) handle the submit (will only happen on POST)
        $commentform->handleRequest($request);
        if ($commentform->isSubmitted()) {
            $comment->setDate(new \DateTime());
            $usr= $this->get('security.context')->getToken()->getUser();
            $comment->setCreateur($usr);
            $em = $this->getDoctrine()->getManager();
            $repobj = $em
                ->getRepository('WCSWildExchangeBundle:Reponses')
                ->find($_POST['reponseid']);
            $comment->setReponse($repobj);
            $em->persist($comment);
            $em->flush();
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
            'question'=>$questionobj, 'listereponse'=>$listereponse, 'commentform'=>$commentform->createView()));
    }

    /*   Fonction de suppression de question  */
    public function DeleteAction($id){

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('homepage');
        }
        $usr= $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $reponse = $em
            ->getRepository('WCSWildExchangeBundle:Reponses')
            ->find($id);

        if (empty($reponse)){
            $this->addFlash('notuseroradmin', "La réponse n'existe pas/plus !");
            return $this->redirectToRoute('tagspage');
        }

        if($reponse->getCreateur() == $usr || $usr->getRang()->getId() >= 2){
            $id = $reponse->getQuestion()->getId();
            var_dump($id);
            $em->remove($reponse);
            $em->flush();
            $this->addFlash(
                'deletesuccess',
                'La réponse a bien été supprimée !'
            );
            return $this->redirectToRoute('reponsepage', array('id'=>$id));
        }
        else{
            $this->addFlash(
                'faildelete',
                'Vous ne pouvez pas supprimer cette réponse !'
            );
            $referer = $this->getRequest()->headers->get('referer');

            return $this->redirect($referer);
        }
    }

    /*   Fonction de d'édition de question  */
    public function EditAction($id){

        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour editer une question !");
            return $this->redirectToRoute('connectionpage');
        }
        // 1) build the form
        $em = $this->getDoctrine()->getManager();

        $reponse = $em
            ->getRepository('WCSWildExchangeBundle:Reponses')
            ->find($id);

        if (empty($reponse)){
            $this->addFlash('notuseroradmin', "La réponse n'existe pas/plus !");
            return $this->redirectToRoute('tagspage');
        }

        $usr= $this->get('security.context')->getToken()->getUser();

        if($reponse->getCreateur()->getId() != $usr->getId() || !$usr->getRang()->getId() >= 2){
            $this->addFlash('notuseroradmin', "Vous ne pouvez pas editer cette réponse !");
            return $this->redirectToRoute('reponsepage', array('id'=>$reponse->getQuestion()->getId()));
        }

        if (isset($_POST['contenu'])) {
            $this->checkBadges();
            $reponse->setContenu($_POST['contenu']);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre réponse a bien été éditée !'
            );

            return $this->redirectToRoute('reponsepage', array('id'=>$reponse->getQuestion()->getId()));
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:editerrep.html.twig',
            array('reponse' => $reponse)
        );
    }
}