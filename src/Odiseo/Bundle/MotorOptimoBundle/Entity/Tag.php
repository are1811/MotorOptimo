<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class Tag
{
    private $id;
    private $tagName;
    private $posts;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }
    
    public function getTagName()
    {
        return $this->tagName;
    }
    
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }
    
    public function getPosts()
    {
        return $this->posts;
    }
}
