<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('@App/page/index.html.twig');
    }

    public function showAction($id)
    {
        return $this->render('@App/page/show.html.twig', compact('id'));
    }
}
