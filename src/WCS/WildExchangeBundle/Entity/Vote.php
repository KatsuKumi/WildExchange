<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\VoteRepository")
 */
class Vote
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
     * @var bool
     *
     * @ORM\Column(name="value", type="boolean")
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="votes")
     */
    private $votant;


    /**
     * @ORM\ManyToOne(targetEntity="Questions", inversedBy="votes")
     */
    private $question;


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
     * Set value
     *
     * @param boolean $value
     * @return Vote
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return boolean 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Vote
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
     * Set votant
     *
     * @param \WCS\WildExchangeBundle\Entity\Utilisateur $votant
     * @return Vote
     */
    public function setVotant(\WCS\WildExchangeBundle\Entity\Utilisateur $votant = null)
    {
        $this->votant = $votant;

        return $this;
    }

    /**
     * Get votant
     *
     * @return \WCS\WildExchangeBundle\Entity\Utilisateur 
     */
    public function getVotant()
    {
        return $this->votant;
    }

    /**
     * Set question
     *
     * @param \WCS\WildExchangeBundle\Entity\Questions $question
     * @return Vote
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
}
