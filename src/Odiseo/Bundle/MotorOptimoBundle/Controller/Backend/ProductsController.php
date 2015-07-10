<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Odiseo\Bundle\MotorOptimoBundle\Entity\Post;
use Odiseo\Bundle\MotorOptimoBundle\Entity\Tag;
use Odiseo\Bundle\MotorOptimoBundle\Entity\Resource;

class ProductsController extends Controller
{
    public function adminProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend/products:products.html.twig', array());    	 
    }
    
    public function viewAllProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend/products:products.html.twig', array());
    }
    
    public function addProductsAction()
    {
    	$resource = new Resource();
    	$resource->setPath('bundles/odiseomotoroptimo/images/slider/kuga.jpg');
    	$resource->setResourceType('1');	// 1:Imagen 2:Video
    	
    	$tag = new Tag();
    	$tag->setTag('Ford kuga');
    	
    	$product = new Post();
    	$product->setTitle('Ford kuga');
    	$product->setText('');
    	$product->setPostType('2');    // 1:Post 2:Slider 3:Tips
    	
    	// relaciona este producto con un tag
    	$product->setTag($tag);
    	// relaciona este producto con un resource
    	$product->setResource($resource);
    	
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($tag);
    	$em->persist($resource);
    	$em->persist($product);
    	$em->flush();
    	
    	return $this->render('OdiseoMotorOptimoBundle:backend/products:addProduct.html.twig', array());
    }    
}
