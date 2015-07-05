<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


class PostType
{
    private $id;
    private $name;
    private $posts;
    
    public function __construct(){

    	$this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setPosts($posts)
    {
        $this->posts = $posts;

        return $this;
    }

    public function addPost(Post $post)
    {
    	$this->posts[] = $post;
    }
    
    public function getPosts()
    {
        return $this->posts;
    }

    public function removePost(Post $post)
    {
    	$this->posts->removeElement($post);
    }
    public function __toString(){
    	return $this->name;
    }
}
