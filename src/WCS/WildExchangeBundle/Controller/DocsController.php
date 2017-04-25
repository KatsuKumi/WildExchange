<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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
}