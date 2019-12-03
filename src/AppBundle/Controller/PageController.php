<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $pages = [
            1 => 'First page',
            2 => 'Second page',
            3 => 'Third page'
        ];

        return $this->render('@App/page/index.html.twig', compact('pages'));
    }

    public function showAction($id)
    {
        return $this->render('@App/page/show.html.twig', compact('id'));
    }
}
