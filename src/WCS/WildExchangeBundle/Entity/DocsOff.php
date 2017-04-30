<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocsOff
 *
 * @ORM\Table(name="docs_off")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\DocsOffRepository")
 */
class DocsOff
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * Many Users have Many Groups.
     * @ORM\ManyToMany(targetEntity="Tags", inversedBy="docsoff")
     * @ORM\JoinTable(name="docsoff_tags")
     */
    private $tags;


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
     * @return DocsOff
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
     * Set url
     *
     * @param string $url
     * @return DocsOff
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
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
     * @return DocsOff
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
}
