<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdiseoMotorOptimoBundle:frontend:index.html.twig', array());
    }
}
