<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DocsController extends Controller
{
    public function docsAction()
    {
        return $this->render('WCSWildExchangeBundle:Default:index.html.twig');
    }
}