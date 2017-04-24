<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponses")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\ReponsesRepository")
 */
class Reponses
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
     * @ORM\Column(name="Contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @ORM\OneToMany(targetEntity="Vote", mappedBy="reponse" , cascade={"remove"})
     */
    private $votes;

    /**
     * @ORM\ManyToOne(targetEntity="Questions", inversedBy="reponses")
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="reponses")
     */
    private $createur;

    /**
     * @ORM\OneToMany(targetEntity="Commentaire",  mappedBy="reponse" , cascade={"remove"})
     */
    private $commentaires;


    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Reponses
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
     * @return Reponses
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
     * Set question
     *
     * @param \WCS\WildExchangeBundle\Entity\Questions $question
     * @return Reponses
     */
    public function setQuestion(\WCS\WildExchangeBundle\Entity\Questions $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \WCS\WildExchangeBundle\Entity\Questions 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set createur
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $createur
     * @return Reponses
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->votes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add votes
     *
     * @param \WCS\WildExchangeBundle\Entity\Vote $votes
     * @return Reponses
     */
    public function addVote(\WCS\WildExchangeBundle\Entity\Vote $votes)
    {
        $this->votes[] = $votes;

        return $this;
    }

    /**
     * Remove votes
     *
     * @param \WCS\WildExchangeBundle\Entity\Vote $votes
     */
    public function removeVote(\WCS\WildExchangeBundle\Entity\Vote $votes)
    {
        $this->votes->removeElement($votes);
    }

    /**
     * Get votes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Add commentaires
     *
     * @param \WCS\WildExchangeBundle\Entity\Commentaire $commentaires
     * @return Reponses
     */
    public function addCommentaire(\WCS\WildExchangeBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \WCS\WildExchangeBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\WCS\WildExchangeBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }

    /**
     * Get commentaires
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
}
