<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:index.html.twig');
    }
    public function testAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:test.html.twig');
    }
}
