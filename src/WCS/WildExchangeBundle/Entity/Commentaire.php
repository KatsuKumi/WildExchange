<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Reponses", inversedBy="commentaires")
     */
    private $reponse;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="commentaires")
     */
    private $createur;

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
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set reponse
     *
     * @param \WCS\WildExchangeBundle\Entity\Reponses $reponse
     * @return Commentaire
     */
    public function setReponse(\WCS\WildExchangeBundle\Entity\Reponses $reponse = null)
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * Get reponse
     *
     * @return \WCS\WildExchangeBundle\Entity\Reponses 
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * Set createur
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $createur
     * @return Commentaire
     */
    public function setCreateur(\WCS\WildExchangeBundle\Entity\Utilisateur $createur = null)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \WCS\WildExchangeBundle\Entity\Utilisateur 
     */
    public function getCreateur()
    {
        return $this->createur;
    }
}
