<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use DateTime;

class Post
{
    private $id;

    private $title;    
    
    private $text;

    private $resource;

    private $tag;
    
    private $postType;
    
    private $date;
    
    
    public function __construct()
    {
    	$this->date = new DateTime('now');
    }
    
    public function getId()
    {
        return $this->id;
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
    
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    public function getText()
    {
        return $this->text;
    }

    public function getResource() {
    	return $this->$resource;
    }
    
    public function setResource(Resource $resource) {
    	$this->resource = $resource;
    	return $this;
    }
    
    public function getTag() {
    	return $this->$tag;
    }
    
    public function setTag(Tag $tag) {
    	$this->tag = $tag;
    	return $this;
    }
    
    public function setPostType($postType)
    {
        $this->postType = $postType;

        return $this;
    }

    public function getPostType()
    {
        return $this->postType;
    }
    
    public function setDate($date)
    {
    	$this->date = $date;
    
    	return $this;
    }
    
    public function getDate()
    {
    	return $this->date;
    }    
}
