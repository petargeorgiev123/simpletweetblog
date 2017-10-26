<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tweets
 *
 * @ORM\Table(name="tweets")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TweetsRepository")
 */
class Tweets
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
     * @ORM\Column(name="text", type="string", length=255)
     */
    private $text;

    /**
     * @var int
     *
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Author")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id", nullable=false)
     */
    private $authorId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Tweets
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set authorId
     *
     * @param integer $authorId
     *
     * @return Tweets
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get authorId
     *
     * @return int
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->text;
    }
}

