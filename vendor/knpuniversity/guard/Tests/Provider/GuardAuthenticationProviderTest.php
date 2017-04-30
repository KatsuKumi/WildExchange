<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KnpU\Guard\Tests\Provider;

use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use KnpU\Guard\Provider\GuardAuthenticationProvider;
use KnpU\Guard\Token\PostAuthenticationGuardToken;

/**
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
class GuardAuthenticationProviderTest extends \PHPUnit_Framework_TestCase
{
    private $userProvider;
    private $userChecker;
    private $preAuthenticationToken;

    public function testAuthenticate()
    {
        $providerKey = 'my_cool_firewall';

        $authenticatorA = $this->getMock('KnpU\Guard\GuardAuthenticatorInterface');
        $authenticatorB = $this->getMock('KnpU\Guard\GuardAuthenticatorInterface');
        $authenticatorC = $this->getMock('KnpU\Guard\GuardAuthenticatorInterface');
        $authenticators = array($authenticatorA, $authenticatorB, $authenticatorC);

        // called 2 times - for authenticator A and B (stops on B because of match)
        $this->preAuthenticationToken->expects($this->exactly(2))
            ->method('getGuardProviderKey')
            // it will return the "1" index, which will match authenticatorB
            ->will($this->returnValue('my_cool_firewall_1'));

        $enteredCredentials = array(
            'username' => '_weaverryan_test_user',
            'password' => 'guard_auth_ftw',
        );
        $this->preAuthenticationToken->expects($this->atLeastOnce())
            ->method('getCredentials')
            ->will($this->returnValue($enteredCredentials));

        // authenticators A and C are never called
        $authenticatorA->expects($this->never())
            ->method('getUser');
        $authenticatorC->expects($this->never())
            ->method('getUser');

        $mockedUser = $this->getMock('Symfony\Component\Security\Core\User\UserInterface');
        $authenticatorB->expects($this->once())
            ->method('getUser')
            ->with($enteredCredentials, $this->userProvider)
            ->will($this->returnValue($mockedUser));
        // checkCredentials is called
        $authenticatorB->expects($this->once())
            ->method('checkCredentials')
            ->with($enteredCredentials, $mockedUser);
        $authedToken = $this->getMock('Symfony\Component\Security\Core\Authentication\Token\TokenInterface');
        $authenticatorB->expects($this->once())
            ->method('createAuthenticatedToken')
            ->with($mockedUser, $providerKey)
            ->will($this->returnValue($authedToken));

        // user checker should be called
        $this->userChecker->expects($this->once())
            ->method('checkPreAuth')
            ->with($mockedUser);
        $this->userChecker->expects($this->once())
            ->method('checkPostAuth')
            ->with($mockedUser);

        $provider = new GuardAuthenticationProvider($authenticators, $this->userProvider, $providerKey, $this->userChecker);
        $actualAuthedToken = $provider->authenticate($this->preAuthenticationToken);
        $this->assertSame($authedToken, $actualAuthedToken);
    }

    public function testGuardWithNoLongerAuthenticatedTriggersLogout()
    {
        $providerKey = 'my_firewall_abc';

        // create a token and mark it as NOT authenticated anymore
        // this mimics what would happen if a user "changed" between request
        $mockedUser = $this->getMock('Symfony\Component\Security\Core\User\UserInterface');
        $token = new PostAuthenticationGuardToken($mockedUser, $providerKey, array('ROLE_USER'));
        $token->setAuthenticated(false);

        $provider = new GuardAuthenticationProvider(array(), $this->userProvider, $providerKey, $this->userChecker);
        $actualToken = $provider->authenticate($token);
        // this should return the anonymous user
        $this->assertEquals(new AnonymousToken($providerKey, 'anon.'), $actualToken);
    }

    protected function setUp()
    {
        $this->userProvider = $this->getMock('Symfony\Component\Security\Core\User\UserProviderInterface');
        $this->userChecker = $this->getMock('Symfony\Component\Security\Core\User\UserCheckerInterface');
        $this->preAuthenticationToken = $this->getMockBuilder('KnpU\Guard\Token\PreAuthenticationGuardToken')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        $this->userProvider = null;
        $this->userChecker = null;
        $this->preAuthenticationToken = null;
    }
}
