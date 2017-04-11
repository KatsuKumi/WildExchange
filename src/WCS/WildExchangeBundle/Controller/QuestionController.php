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
    public function ajoutAction(Request $request)
    {
        // 1) build the form
        $question = new Questions();
        $form = $this->createForm(QuestionsType::class, $question);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $question->setDate(new \DateTime());
            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($question);
            $em->flush();


            $this->addFlash(
                'ajoutsuccess',
                'Votre question a bien été ajoutée !'
            );
            return $this->redirectToRoute('wcs_wild_exchange_homepage');
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:ajout.html.twig',
            array('form' => $form->createView())
        );
    }
}