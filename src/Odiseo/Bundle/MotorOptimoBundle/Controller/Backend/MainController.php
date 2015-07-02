<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdiseoMotorOptimoBundle:backend:admin.html.twig', array());
    }

    public function adminProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend:productos.html.twig', array());    	 
    }
    
    public function viewAllProductsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend:admin.html.twig', array());
    }
}
