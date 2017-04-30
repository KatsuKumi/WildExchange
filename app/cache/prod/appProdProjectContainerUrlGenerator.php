<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'wcs_wild_exchange_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'connectionpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::connexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscriptionpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tagspage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::tagsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tags',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'questionpage' => array (  0 =>   array (    0 => 'tag',  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::questionsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tag',    ),    1 =>     array (      0 => 'text',      1 => '/questions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ajoutpage' => array (  0 =>   array (    0 => 'tag',  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tag',    ),    1 =>     array (      0 => 'text',      1 => '/ajout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'reponsepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::reponsesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/reponses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dashboardpage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dashboard',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
