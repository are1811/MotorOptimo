<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

class Post
{
    private $id;
    private $text;
    private $title;
    private $resource;
    private $tags;
    private $type;
 	protected $created;
 	protected $updated;


    public function __construct()
    {
    	$this->created = new DateTime('now');
    	$this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
    
    public function getText()
    {
        return $this->text;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }
    
    public function getResource()
    {
        return $this->resource;
    }
    
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    public function addTag(Tag $tag)
    {
    	$this->tags[] = $tag;
    }
    
    public function getTags()
    {
        return $this->tags;
    }

    public function removeTag(Tag $tag)
    {
    	$this->tags->removeElement($tag);
    }

    public function setType($type)
    {
    	$this->type = $type;
    
    	return $this;
    }
    
    public function getType()
    {
    	return $this->type;
    }
    
    public function getCreated()
    {
        return $this->created;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}
