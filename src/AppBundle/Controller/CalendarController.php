<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class CalendarController extends Controller
{
    /**
     * @Route("/calendar", name="calendar")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('calendar/calendar.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}