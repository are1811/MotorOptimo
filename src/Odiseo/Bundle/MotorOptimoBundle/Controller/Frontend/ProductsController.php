<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
    	
    	//Mostrar productos
    	$em = $this->getDoctrine()->getManager();
    	$posts = $em->getRepository('OdiseoMotorOptimoBundle:Post')->findAll();

        return $this->render('OdiseoMotorOptimoBundle:frontend:products.html.twig', array('posts' => $posts));
    }
}
