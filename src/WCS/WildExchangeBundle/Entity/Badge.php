<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Badge
 *
 * @ORM\Table(name="badge")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\BadgeRepository")
 */
class Badge
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var int
     *
     * @ORM\Column(name="minquestion", type="integer", nullable=true)
     */
    private $minquestion;

    /**
     * @var int
     *
     * @ORM\Column(name="minreponse", type="integer", nullable=true)
     */
    private $minreponse;

    /**
     * @var int
     *
     * @ORM\Column(name="minvote", type="integer", nullable=true)
     */
    private $minvote;

    /**
     * @var string
     *
     * @ORM\Column(name="imgurl", type="string", length=255)
     */
    private $imgurl;

    /**
     * @ORM\ManyToMany(targetEntity="Utilisateur", inversedBy="badges")
     * @ORM\JoinTable(name="utilisateurs_badges")
     */
    private $utilisateurs;


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
     * Set nom
     *
     * @param string $nom
     * @return Badge
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
     * Set minquestion
     *
     * @param integer $minquestion
     * @return Badge
     */
    public function setMinquestion($minquestion)
    {
        $this->minquestion = $minquestion;

        return $this;
    }

    /**
     * Get minquestion
     *
     * @return integer 
     */
    public function getMinquestion()
    {
        return $this->minquestion;
    }

    /**
     * Set minreponse
     *
     * @param integer $minreponse
     * @return Badge
     */
    public function setMinreponse($minreponse)
    {
        $this->minreponse = $minreponse;

        return $this;
    }

    /**
     * Get minreponse
     *
     * @return integer 
     */
    public function getMinreponse()
    {
        return $this->minreponse;
    }

    /**
     * Set minvote
     *
     * @param integer $minvote
     * @return Badge
     */
    public function setMinvote($minvote)
    {
        $this->minvote = $minvote;

        return $this;
    }

    /**
     * Get minvote
     *
     * @return integer 
     */
    public function getMinvote()
    {
        return $this->minvote;
    }

    /**
     * Set imgurl
     *
     * @param string $imgurl
     * @return Badge
     */
    public function setImgurl($imgurl)
    {
        $this->imgurl = $imgurl;

        return $this;
    }

    /**
     * Get imgurl
     *
     * @return string 
     */
    public function getImgurl()
    {
        return $this->imgurl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add utilisateurs
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $utilisateurs
     * @return Badge
     */
    public function addUtilisateur(\WCS\WildExchangeBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs[] = $utilisateurs;

        return $this;
    }

    /**
     * Remove utilisateurs
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $utilisateurs
     */
    public function removeUtilisateur(\WCS\WildExchangeBundle\Entity\Utilisateur $utilisateurs)
    {
        $this->utilisateurs->removeElement($utilisateurs);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
