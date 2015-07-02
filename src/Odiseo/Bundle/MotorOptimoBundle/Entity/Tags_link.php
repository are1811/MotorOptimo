<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags_link
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tags_link
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tag_id", type="integer")
     */
    private $tagId;

    /**
     * @var integer
     *
     * @ORM\Column(name="post_id", type="integer")
     */
    private $postId;


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
     * Set tagId
     *
     * @param integer $tagId
     * @return Tags_link
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set postId
     *
     * @param integer $postId
     * @return Tags_link
     */
    public function setPostId($postId)
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * Get postId
     *
     * @return integer 
     */
    public function getPostId()
    {
        return $this->postId;
    }
}
