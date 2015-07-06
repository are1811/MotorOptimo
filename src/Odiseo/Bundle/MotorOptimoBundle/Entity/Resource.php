<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use DateTime;

class Resource
{
    private $id;

    private $path;

    private $date;

    private $resourceType;
    
    private $posts;
    
    
    public function __construct()
    {
    	$this->date = new DateTime('now');
    	$this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    public function getPath()
    {
        return $this->path;
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

    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    public function getResourceType()
    {
        return $this->resourceType;
    }
}
