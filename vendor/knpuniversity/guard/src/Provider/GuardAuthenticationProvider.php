<?php

namespace KnpU\Guard\Provider;

use Symfony\Component\Security\Core\Authentication\Provider\AuthenticationProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use KnpU\Guard\GuardAuthenticatorInterface;
use KnpU\Guard\Token\GuardTokenInterface;
use KnpU\Guard\Token\PreAuthenticationGuardToken;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * Responsible for accepting the PreAuthenticationGuardToken and calling
 * the correct authenticator to retrieve the authenticated token.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class GuardAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * @var GuardAuthenticatorInterface[]
     */
    private $guardAuthenticators;
    private $userProvider;
    private $providerKey;
    private $userChecker;

    /**
     * @param GuardAuthenticatorInterface[] $guardAuthenticators The authenticators, with keys that match what's passed to GuardAuthenticationListener
     * @param UserProviderInterface         $userProvider        The user provider
     * @param string                        $providerKey         The provider (i.e. firewall) key
     * @param UserCheckerInterface          $userChecker
     */
    public function __construct(array $guardAuthenticators, UserProviderInterface $userProvider, $providerKey, UserCheckerInterface $userChecker)
    {
        $this->guardAuthenticators = $guardAuthenticators;
        $this->userProvider = $userProvider;
        $this->providerKey = $providerKey;
        $this->userChecker = $userChecker;
    }

    /**
     * Finds the correct authenticator for the token and calls it.
     *
     * @param GuardTokenInterface $token
     *
     * @return TokenInterface
     */
    public function authenticate(TokenInterface $token)
    {
        if (!$this->supports($token)) {
            throw new \InvalidArgumentException('GuardAuthenticationProvider only supports GuardTokenInterface.');
        }

        if (!$token instanceof PreAuthenticationGuardToken) {
            /*
             * The listener *only* passes PreAuthenticationGuardToken instances.
             * This means that an authenticated token (e.g. PostAuthenticationGuardToken)
             * is being passed here, which happens if that token becomes
             * "not authenticated" (e.g. happens if the user changes between
             * requests). In this case, the user should be logged out, so
             * we will return an AnonymousToken to accomplish that.
             */

            // this should never happen - but technically, the token is
            // authenticated... so it could just be returned
            if ($token->isAuthenticated()) {
                return $token;
            }

            // cause the logout - the token is not authenticated
            return new AnonymousToken($this->providerKey, 'anon.');
        }

        // find the *one* GuardAuthenticator that this token originated from
        foreach ($this->guardAuthenticators as $key => $guardAuthenticator) {
            // get a key that's unique to *this* guard authenticator
            // this MUST be the same as GuardAuthenticationListener
            $uniqueGuardKey = $this->providerKey.'_'.$key;

            if ($uniqueGuardKey == $token->getGuardProviderKey()) {
                return $this->authenticateViaGuard($guardAuthenticator, $token);
            }
        }

        // no matching authenticator found - but there will be multiple GuardAuthenticationProvider
        // instances that will be checked if you have multiple firewalls.
    }

    private function authenticateViaGuard(GuardAuthenticatorInterface $guardAuthenticator, PreAuthenticationGuardToken $token)
    {
        // get the user from the GuardAuthenticator
        $user = $guardAuthenticator->getUser($token->getCredentials(), $this->userProvider);

        if (null === $user) {
            throw new UsernameNotFoundException(sprintf(
                'Null returned from %s::getUser()',
                get_class($guardAuthenticator)
            ));
        }

        if (!$user instanceof UserInterface) {
            throw new \UnexpectedValueException(sprintf(
                'The %s::getUser method must return a UserInterface. You returned %s.',
                get_class($guardAuthenticator),
                is_object($user) ? get_class($user) : gettype($user)
            ));
        }

        // check the preAuth UserChecker
        $this->userChecker->checkPreAuth($user);
        // check the credentials
        $guardAuthenticator->checkCredentials($token->getCredentials(), $user);
        // check the postAuth UserChecker
        $this->userChecker->checkPostAuth($user);

        // turn the UserInterface into a TokenInterface
        $authenticatedToken = $guardAuthenticator->createAuthenticatedToken($user, $this->providerKey);
        if (!$authenticatedToken instanceof TokenInterface) {
            throw new \UnexpectedValueException(sprintf(
                'The %s::createAuthenticatedToken method must return a TokenInterface. You returned %s.',
                get_class($guardAuthenticator),
                is_object($authenticatedToken) ? get_class($authenticatedToken) : gettype($authenticatedToken)
            ));
        }

        return $authenticatedToken;
    }

    public function supports(TokenInterface $token)
    {
        return $token instanceof GuardTokenInterface;
    }
}
