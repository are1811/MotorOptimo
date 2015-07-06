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
    	$resource->setPath('bundles/odiseomotoroptimo/images/bujia-ngk-standard.jpg');
    	$resource->setResourceType('1');
    	
    	$tag = new Tag();
    	$tag->setTag('Bujias');
    	
    	$product = new Post();
    	$product->setTitle('Bujias NGK');
    	$product->setText('La bujía de encendido NGK es una pieza eléctrica que trabaja en alta voltaje, por lo tanto, los equipos para test 
						   deben ser compatibles a ese voltaje');
    	$product->setPostType('1');    
    	
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
