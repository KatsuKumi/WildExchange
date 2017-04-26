<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\WildExchangeBundle\Entity\Docs;
use WCS\WildExchangeBundle\Form\DocsType;


class DocsController extends Controller
{
    public function docsAction($tag)
    {
        $em = $this->getDoctrine()->getManager();

        $tagobj = $em
            ->getRepository('WCSWildExchangeBundle:Tags')
            ->findOneByNom($tag);
        if (empty($tagobj)) {
            $this->addFlash('connexion', "Ce tag n'existe pas !");
            return $this->redirectToRoute('tagspage');
        }
        return $this->render('WCSWildExchangeBundle:Default:docs.html.twig', array(
        'tags' => $tagobj
    ));
    }

    public function ajoutdocsAction(Request $request, $tag)
    {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Vous devez être connecté pour ajouter une documentation !");
            return $this->redirectToRoute('connectionpage');
        }
        // 1) build the form
        $doc = new Docs();
        $form = $this->createForm(DocsType::class, $doc);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $doc->setDate(new \DateTime());
            $usr= $this->get('security.context')->getToken()->getUser();
            $doc->setCreateur($usr);
            $em = $this->getDoctrine()->getManager();
            $tagobj = $em
                ->getRepository('WCSWildExchangeBundle:Tags')
                ->findOneByNom($tag);
            $doc->addTag($tagobj);
            $status = $em
                ->getRepository('WCSWildExchangeBundle:Status')
                ->find(1);
            $doc->setStatus($status);
            $em->persist($doc);
            $em->flush();
            $this->addFlash(
                'ajoutsuccess',
                'Votre documentation a bien été ajoutée !'
            );
            $this->checkBadges();

            return $this->redirectToRoute('docspage', array('tag'=>$tag, 'page'=>    1));
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:ajoutdocs.html.twig',
            array('form' => $form->createView())
        );
    }
}