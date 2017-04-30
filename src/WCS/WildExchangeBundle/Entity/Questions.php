<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\QuestionsRepository")
 */
class Questions
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="questions")
     */
    private $createur;


    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="questions")
     */
    private $status;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Tags", inversedBy="questions")
     * @ORM\JoinTable(name="questions_tags")
     */
    private $tags;


    /**
     * @ORM\OneToMany(targetEntity="Vote", mappedBy="question", cascade={"remove"})
     */
    private $votes;

    /**
     * @ORM\OneToMany(targetEntity="Reponses",  mappedBy="question", cascade={"remove"})
     */
    private $reponses;

    /**
     * @ORM\OneToOne(targetEntity="Reponses", cascade={"remove"})
     */
    private $solution;

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
     * Set titre
     *
     * @param string $titre
     * @return Questions
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Questions
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
     * @return Questions
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
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add tags
     *
     * @param \WCS\WildExchangeBundle\Entity\Tags $tags
     * @return Questions
     */
    public function addTag(\WCS\WildExchangeBundle\Entity\Tags $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \WCS\WildExchangeBundle\Entity\Tags $tags
     */
    public function removeTag(\WCS\WildExchangeBundle\Entity\Tags $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set createur
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $createur
     * @return Questions
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
     * Add votes
     *
     * @param \WCS\WildExchangeBundle\Entity\Vote $votes
     * @return Questions
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
     * Add reponses
     *
     * @param \WCS\WildExchangeBundle\Entity\Reponses $reponses
     * @return Questions
     */
    public function addReponse(\WCS\WildExchangeBundle\Entity\Reponses $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \WCS\WildExchangeBundle\Entity\Reponses $reponses
     */
    public function removeReponse(\WCS\WildExchangeBundle\Entity\Reponses $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * Set status
     *
     * @param \WCS\WildExchangeBundle\Entity\Status $status
     * @return Questions
     */
    public function setStatus(\WCS\WildExchangeBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \WCS\WildExchangeBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set solution
     *
     * @param \WCS\WildExchangeBundle\Entity\Reponses $solution
     * @return Questions
     */
    public function setSolution(\WCS\WildExchangeBundle\Entity\Reponses $solution = null)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return \WCS\WildExchangeBundle\Entity\Reponses 
     */
    public function getSolution()
    {
        return $this->solution;
    }
}
