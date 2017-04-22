<?php

namespace WCS\WildExchangeBundle\Controller;

use WCS\WildExchangeBundle\Form\UtilisateurType;
use WCS\WildExchangeBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$this->IsStrenghtEnought($user->getMotDePasse())){
                $passerror = "Le mot de passe doit contenir 6 charactères, 1 chiffre & 1 lettre minuscule !";

                return $this->render(
                    'WCSWildExchangeBundle:Default:inscription.html.twig',
                    array('form' => $form->createView(),
                        'error' => $passerror)
                );
            }
            else{
                // 3) Encode the password (you could also do this via Doctrine listener)
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getMotDePasse());
                $user->setMotDePasse($password);
                $user->setDateInscription(new \DateTime());
                $em = $this->getDoctrine()->getManager();
                $rang = $em
                    ->getRepository('WCSWildExchangeBundle:Rang')
                    ->find(1);
                $user->setIDRang($rang);
                // 4) save the User!
                $user->setAvatarURL("avatar/avatar.png");
                $em->persist($user);
                $em->flush();


                $this->addFlash(
                    'inscriptionsuccess',
                    'Vous êtes bien inscrit !'
                );
                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render(
            'WCSWildExchangeBundle:Default:inscription.html.twig',
            array('form' => $form->createView(),
                'error' => null)
        );
    }
    public function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
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
    public static function IsStrenghtEnought($password){
        if(strlen($password) < 6){
            return false;
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            return false;
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            return false;
        } else {
            return true;
        }
    }
    public function editprofilAction(){
       $postparams = $_POST;
       $em = $this->getDoctrine()->getManager();
       $user = $this->get('security.context')->getToken()->getUser();
       if (!empty($_FILES['avatar']['name'])){
        $infosfiles = pathinfo($_FILES['avatar']['name']);
        $uploadDir = $this->container->getParameter('avatar_dir');
        $nom = "{$infosfiles['filename']}{$this->generateRandomString()}.{$infosfiles['extension']}";
        $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'],"{$uploadDir}/$nom");
        $user->setAvatarurl("avatar/{$nom}");
       }
       $user->setEmail($_POST['email']);
       if (!empty($_POST['password'])){
           $encoder = $this->container->get('security.password_encoder');
           $encoded = $encoder->encodePassword($user, $_POST['password']);
           $user->setMotdePasse($encoded);
       }
       $user->setGithub($_POST['GitHub']);
       $user->setTwitter($_POST['Twitter']);
       $user->setFacebook($_POST['Facebook']);
       $linkedin = str_replace('http:', '', str_replace('/', '', str_replace('https://', '' ,str_replace('www.linkedin.com/in/','',$_POST['LinkedLn']))));
       $user->setLinkedin($linkedin);
       $em->flush();
       $this->addFlash(
           'ajoutsuccess',
           'Vos modifications ont bien été prises en compte !'
       );
       return $this->redirectToRoute('dashboardpage');


    }
}