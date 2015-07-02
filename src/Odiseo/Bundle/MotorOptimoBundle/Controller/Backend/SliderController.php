<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SliderController extends Controller
{
    public function adminSliderAction() 
    {
    	return $this->render('OdiseoMotorOptimoBundle:backend/slider:slider.html.twig', array());    	 
    }
}