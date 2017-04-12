<?php

namespace WCS\WildExchangeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use WCS\WildExchangeBundle\Entity\Questions;
use WCS\WildExchangeBundle\Form\QuestionsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class QuestionController extends Controller
{
    /**
     * @Route("/ajout", name="question_ajout")
     */
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
                ->findByNom($tag);
            $question->addTag($tagobj[0]);
            $em->persist($question);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre question a bien été ajoutée !'
            );

            return $this->redirectToRoute('questionpage', array('tag'=>$tag));
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:ajout.html.twig',
            array('form' => $form->createView())
        );
    }
}