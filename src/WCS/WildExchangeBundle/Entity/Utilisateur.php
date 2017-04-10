<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 * @ORM\Table(name="utilisateur")
 * @UniqueEntity(fields="email", message="Email déjà utilisé")
 * @UniqueEntity(fields="pseudo", message="Pseudo déjà utilisé")
 */
class Utilisateur implements UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $motDePasse;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $interet;
    /**
     * @var string
     */
    private $gitHub;

    /**
     * @var string
     */
    private $faceBook;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $linkedIn;

    /**
     * @var string
     */
    private $avatarURL;

    /**
     * @var \DateTime
     */
    private $dateInscription;

    /**
     * @var \DateTime
     */
    private $dateConnexion;

    /**
     * @var int
     */
    private $iDRang;

    /**
     * @var string
     */
    private $iDEcole;

    public function getRoles() { return array('ROLE_USER'); }

    public function getPassword()
    {
        return $this->motDePasse;
    }
    public function getUsername()
    {
        return $this->pseudo;
    }
    public function getSalt()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return '';
    }
    public function eraseCredentials()
    {
        // The bcrypt algorithm doesn't require a separate salt.
        // You *may* need a real salt if you choose a different encoder.
        return null;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return Utilisateur
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set motDePasse
     *
     * @param string $motDePasse
     * @return Utilisateur
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    /**
     * Get motDePasse
     *
     * @return string 
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set gitHub
     *
     * @param string $gitHub
     * @return Utilisateur
     */
    public function setGitHub($gitHub)
    {
        $this->gitHub = $gitHub;

        return $this;
    }

    /**
     * Get gitHub
     *
     * @return string 
     */
    public function getGitHub()
    {
        return $this->gitHub;
    }

    /**
     * Set faceBook
     *
     * @param string $faceBook
     * @return Utilisateur
     */
    public function setFaceBook($faceBook)
    {
        $this->faceBook = $faceBook;

        return $this;
    }

    /**
     * Get faceBook
     *
     * @return string 
     */
    public function getFaceBook()
    {
        return $this->faceBook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Utilisateur
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }
    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedIn
     *
     * @param string $linkedIn
     * @return Utilisateur
     */
    public function setLinkedIn($linkedIn)
    {
        $this->linkedIn = $linkedIn;

        return $this;
    }

    /**
     * Get linkedIn
     *
     * @return string 
     */
    public function getLinkedIn()
    {
        return $this->linkedIn;
    }

    /**
     * Set avatarURL
     *
     * @param string $avatarURL
     * @return Utilisateur
     */
    public function setAvatarURL($avatarURL)
    {
        $this->avatarURL = $avatarURL;

        return $this;
    }

    /**
     * Get avatarURL
     *
     * @return string 
     */
    public function getAvatarURL()
    {
        return $this->avatarURL;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Utilisateur
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set dateConnexion
     *
     * @param \DateTime $dateConnexion
     * @return Utilisateur
     */
    public function setDateConnexion($dateConnexion)
    {
        $this->dateConnexion = $dateConnexion;

        return $this;
    }

    /**
     * Get dateConnexion
     *
     * @return \DateTime 
     */
    public function getDateConnexion()
    {
        return $this->dateConnexion;
    }

    /**
     * Set iDRang
     *
     * @param integer $iDRang
     * @return Utilisateur
     */
    public function setIDRang($iDRang)
    {
        $this->iDRang = $iDRang;

        return $this;
    }

    /**
     * Get iDRang
     *
     * @return integer 
     */
    public function getIDRang()
    {
        return $this->iDRang;
    }

    /**
     * Set iDEcole
     *
     * @param string $iDEcole
     * @return Utilisateur
     */
    public function setIDEcole($iDEcole)
    {
        $this->iDEcole = $iDEcole;

        return $this;
    }

    /**
     * Get iDEcole
     *
     * @return string 
     */
    public function getIDEcole()
    {
        return $this->iDEcole;
    }
    /**
     * Set interet
     *
     * @param string $interet
     * @return Utilisateur
     */
    public function setInteret($interet)
    {
        $this->interet = $interet;

        return $this;
    }

    /**
     * Get interet
     *
     * @return string 
     */
    public function getInteret()
    {
        return $this->interet;
    }
}
