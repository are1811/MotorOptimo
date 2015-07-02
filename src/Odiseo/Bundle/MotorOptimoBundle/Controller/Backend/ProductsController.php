<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function adminProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend:products.html.twig', array());    	 
    }
    
    public function viewAllProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend:products.html.twig', array());
    }
}
