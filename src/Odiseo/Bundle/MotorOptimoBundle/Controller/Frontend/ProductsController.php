<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdiseoMotorOptimoBundle:frontend:products.html.twig', array());
    }
}
