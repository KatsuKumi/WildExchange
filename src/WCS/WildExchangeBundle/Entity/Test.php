<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 */
class Test
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $qsdqs;


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
     * Set qsdqs
     *
     * @param string $qsdqs
     * @return Test
     */
    public function setQsdqs($qsdqs)
    {
        $this->qsdqs = $qsdqs;

        return $this;
    }

    /**
     * Get qsdqs
     *
     * @return string 
     */
    public function getQsdqs()
    {
        return $this->qsdqs;
    }
}
