<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$posts = $em->getRepository('OdiseoMotorOptimoBundle:Post')->findByPostType('1');
    	$slider = $em->getRepository('OdiseoMotorOptimoBundle:Post')->findByPostType('2');
    	
        return $this->render('OdiseoMotorOptimoBundle:frontend:products.html.twig', array('posts' => $posts, 'slider' => $slider));
    }
}
