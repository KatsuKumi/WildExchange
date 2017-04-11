<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_1D1C63B381604CAB", columns={"Pseudo"}), @ORM\UniqueConstraint(name="UNIQ_1D1C63B326535370", columns={"Email"})})
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Email déjà utilisé")
 * @UniqueEntity(fields="pseudo", message="Pseudo déjà utilisé")
 */
class Utilisateur implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Pseudo", type="string", length=255, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="Mot_de_passe", type="string", length=255, nullable=false)
     */
    private $motDePasse;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="interet", type="string", length=255, nullable=true)
     */
    private $interet;

    /**
     * @var string
     *
     * @ORM\Column(name="GitHub", type="string", length=255, nullable=true)
     */
    private $github;

    /**
     * @var string
     *
     * @ORM\Column(name="FaceBook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="Twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="LinkedIn", type="string", length=255, nullable=true)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="AvatarURL", type="string", length=255, nullable=true)
     */
    private $avatarurl;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Inscription", type="datetime", nullable=false)
     */
    private $dateInscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Connexion", type="datetime", nullable=true)
     */
    private $dateConnexion;

    /**
     * @var integer
     *
     * @ORM\Column(name="IDRang", type="integer", nullable=true)
     */
    private $idrang;

    /**
     * @var string
     *
     * @ORM\Column(name="IDEcole", type="string", length=255, nullable=true)
     */
    private $idecole;

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

    /**
     * Set github
     *
     * @param string $github
     * @return Utilisateur
     */
    public function setGithub($github)
    {
        $this->github = $github;

        return $this;
    }

    /**
     * Get github
     *
     * @return string 
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Utilisateur
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
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
     * Set linkedin
     *
     * @param string $linkedin
     * @return Utilisateur
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set avatarurl
     *
     * @param string $avatarurl
     * @return Utilisateur
     */
    public function setAvatarurl($avatarurl)
    {
        $this->avatarurl = $avatarurl;

        return $this;
    }

    /**
     * Get avatarurl
     *
     * @return string 
     */
    public function getAvatarurl()
    {
        return $this->avatarurl;
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
     * Set idrang
     *
     * @param integer $idrang
     * @return Utilisateur
     */
    public function setIdrang($idrang)
    {
        $this->idrang = $idrang;

        return $this;
    }

    /**
     * Get idrang
     *
     * @return integer 
     */
    public function getIdrang()
    {
        return $this->idrang;
    }

    /**
     * Set idecole
     *
     * @param string $idecole
     * @return Utilisateur
     */
    public function setIdecole($idecole)
    {
        $this->idecole = $idecole;

        return $this;
    }

    /**
     * Get idecole
     *
     * @return string 
     */
    public function getIdecole()
    {
        return $this->idecole;
    }
}
