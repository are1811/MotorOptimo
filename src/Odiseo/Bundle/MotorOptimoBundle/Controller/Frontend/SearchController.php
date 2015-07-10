<?php

namespace Odiseo\Bundle\MotorOptimoBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
    public function indexAction()
    {
        return $this->render('OdiseoMotorOptimoBundle:frontend:search.html.twig', array());
    }
}
