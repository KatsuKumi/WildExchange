<?php

namespace WCS\WildExchangeBundle\Controller;

use WCS\WildExchangeBundle\Form\QuestionsType;
use WCS\WildExchangeBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
        $question = new Question();
        $form = $this->createForm(QuestionsType::class, $question);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $question->setTitre($titre);
            $question->setDateInscription(new \DateTime());
            $question->setQuestion(1);
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
            'WCSWildExchangeBundle:Default:inscription.html.twig',
            array('form' => $form->createView())
        );
    }
}