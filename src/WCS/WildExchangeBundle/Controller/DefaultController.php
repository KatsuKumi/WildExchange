<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use WCS\WildExchangeBundle\Entity\Task;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:index.html.twig');
    }
    public function connexionAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:connexion.html.twig');
    }
    public function inscriptionAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:inscription.html.twig');
    }

}
