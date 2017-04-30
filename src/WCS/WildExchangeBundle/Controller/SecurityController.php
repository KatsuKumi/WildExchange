<?php
namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WCS\WildExchangeBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /*   Génération de la page de connexion   */
    public function connexionAction(Request $request)
    {

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $usr= $this->get('security.context')->getToken()->getUser();
            $this->addFlash('connexion', "Bonjour, ".$usr->getPseudo()." ! 😉 ");
            return $this->redirectToRoute('homepage');
        }
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error){
            $this->addFlash('connexion', str_replace("Invalid credentials.", "Pseudo ou mot de passe invalides.", $error->getMessageKey()));
        }
        return $this->render('WCSWildExchangeBundle:Default:connexion.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $error,
        ));
    }

    /*   Connexion (Gérer par symfony)   */
    public function loginAction(Request $request)
    {
        $usr= $this->get('security.context')->getToken()->getUser();


        return $this->redirectToRoute('connexion');

    }

    /*   Mot de passe oublié   */
    public function forgetAction()
    {
        if (!empty($_POST)) {
            $newpassword = $this->generateRandomString();
            $em = $this->getDoctrine()->getManager();
            $email = $_POST['email'];
            $user = null;
            if (strpos($email, '@')){
                $user = $em
                    ->getRepository('WCSWildExchangeBundle:Utilisateur')
                    ->findOneByEmail($email);
            }
            else{
                $user = $em
                    ->getRepository('WCSWildExchangeBundle:Utilisateur')
                    ->findOneByPseudo($email);
            }

            if ($user){
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $newpassword);
                $user->setMotDePasse($encoded);

                $em->flush();

                $message = \Swift_Message::newInstance()
                    ->setSubject('Password Reset')
                    ->setFrom('wildexchangemail@gmail.com')
                    ->setTo($user->getEmail())
                    ->setBody(
                        $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                            'password_resetting.email.twig',
                            array('user' => $user, 'password' => $newpassword)
                        ),
                        'text/html'
                    );
                $this->get('mailer')->send($message);


                $this->addFlash(
                    'ajoutsuccess',
                    'Votre nouveau mot de passe à été envoyé par mail !'
                );
                return $this->redirectToRoute('homepage');

            }
            else{

                $this->addFlash(
                    'ajoutsuccess',
                    'Aucun compte avec ce mail/pseudo !'
                );
                return $this->redirectToRoute('homepage');
            }
        }
        return $this->render('WCSWildExchangeBundle:Default:forget.html.twig');
    }

    /*   Deconnexion   */
    public function logout(Request $request)
    {
        return $this->redirectToRoute('homepage');

    }

    /*   Fontion de création de chaine de char random   */
    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}