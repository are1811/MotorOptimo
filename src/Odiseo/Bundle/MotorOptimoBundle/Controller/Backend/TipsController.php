<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TipsController extends Controller
{
    public function adminTipsAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend/tips:tips.html.twig', array());    	 
    }
}
