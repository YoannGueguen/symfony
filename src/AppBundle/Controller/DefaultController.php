<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Template()
     * @Route("/", name="index")
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return array();
    }
}
