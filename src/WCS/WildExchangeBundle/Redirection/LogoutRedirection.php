<?php
namespace WCS\WildExchangeBundle\Redirection;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\Session\Session;

class LogoutRedirection implements LogoutSuccessHandlerInterface
{
    private $security;
    private $router;
    private $session;

    public function __construct(SecurityContext $security, Router $router, Session $session)
    {
        $this->security = $security;
        $this->router = $router;
        $this->session = $session;
    }
    public function onLogoutSuccess(Request $request)
    {

        $usr= $this->security->getToken()->getUser();
        if ($usr){
            $this->session->getFlashBag()->add('notice', 'Au revoir '.$usr->getPseudo()." ! 😉");
        }

        $response = new RedirectResponse($this->router->generate('homepage'));

        return $response;
    }
}