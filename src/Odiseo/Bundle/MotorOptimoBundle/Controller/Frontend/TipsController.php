<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TipsController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdiseoMotorOptimoBundle:frontend:tips.html.twig', array());
    }
}
