<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

class Tag
{
    private $id;

    private $tag;

    private $posts;


    public function __construct()
    {
    	$this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    public function getTag()
    {
        return $this->tag;
    }
}
