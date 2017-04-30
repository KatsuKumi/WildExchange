<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // wcs_wild_exchange_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wcs_wild_exchange_homepage');
            }

            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'wcs_wild_exchange_homepage',);
        }

        // connectionpage
        if ($pathinfo === '/connexion') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::connexionAction',  '_route' => 'connectionpage',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // inscriptionpage
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'inscriptionpage',);
        }

        // tagspage
        if ($pathinfo === '/tags') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::tagsAction',  '_route' => 'tagspage',);
        }

        // questionpage
        if (0 === strpos($pathinfo, '/questions') && preg_match('#^/questions/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::questionsAction',));
        }

        // ajoutpage
        if (0 === strpos($pathinfo, '/ajout') && preg_match('#^/ajout/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::ajoutAction',));
        }

        // reponsepage
        if ($pathinfo === '/reponses') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::reponsesAction',  '_route' => 'reponsepage',);
        }

        // dashboardpage
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'dashboardpage',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
