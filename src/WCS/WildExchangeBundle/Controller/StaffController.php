<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class StaffController extends Controller
{
    public function indexAction(){
        return $this->render('WCSWildExchangeBundle:Admin:index.html.twig');
    }

}