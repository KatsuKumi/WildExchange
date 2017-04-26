<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\TagsRepository")
 */
class Tags
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
     * @var string
     *
     * @ORM\Column(name="imageurl", type="string", length=255)
     */
    private $imageurl;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Questions", mappedBy="tags")
     * @ORM\OrderBy({"date" = "DESC"})
     */
    private $questions;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="Docs", mappedBy="tags")
     * @ORM\OrderBy({"date" = "DESC"})
     */
    private $docs;

    /**
     * Many Groups have Many Users.
     * @ORM\ManyToMany(targetEntity="DocsOff", mappedBy="tags")
     */
    private $docsoff;

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
     * @return Tags
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
     * Set imageurl
     *
     * @param string $imageurl
     * @return Tags
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;

        return $this;
    }

    /**
     * Get imageurl
     *
     * @return string 
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questions
     *
     * @param \WCS\WildExchangeBundle\Entity\Questions $questions
     * @return Tags
     */
    public function addQuestion(\WCS\WildExchangeBundle\Entity\Questions $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \WCS\WildExchangeBundle\Entity\Questions $questions
     */
    public function removeQuestion(\WCS\WildExchangeBundle\Entity\Questions $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Add docs
     *
     * @param \WCS\WildExchangeBundle\Entity\Docs $docs
     * @return Tags
     */
    public function addDoc(\WCS\WildExchangeBundle\Entity\Docs $docs)
    {
        $this->docs[] = $docs;

        return $this;
    }

    /**
     * Remove docs
     *
     * @param \WCS\WildExchangeBundle\Entity\Docs $docs
     */
    public function removeDoc(\WCS\WildExchangeBundle\Entity\Docs $docs)
    {
        $this->docs->removeElement($docs);
    }

    /**
     * Get docs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocs()
    {
        return $this->docs;
    }

    /**
     * Add docsoff
     *
     * @param \WCS\WildExchangeBundle\Entity\DocsOff $docsoff
     * @return Tags
     */
    public function addDocsoff(\WCS\WildExchangeBundle\Entity\DocsOff $docsoff)
    {
        $this->docsoff[] = $docsoff;

        return $this;
    }

    /**
     * Remove docsoff
     *
     * @param \WCS\WildExchangeBundle\Entity\DocsOff $docsoff
     */
    public function removeDocsoff(\WCS\WildExchangeBundle\Entity\DocsOff $docsoff)
    {
        $this->docsoff->removeElement($docsoff);
    }

    /**
     * Get docsoff
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocsoff()
    {
        return $this->docsoff;
    }
}
