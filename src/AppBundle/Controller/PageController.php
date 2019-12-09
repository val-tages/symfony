<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PageController extends Controller
{
    public function indexAction(Request $request)
    {
        $pages = $this->getDoctrine()
            ->getRepository('AppBundle:Page')
            ->findAll();


        return $this->render('@App/page/index.html.twig', compact('pages'));
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Page')
            ->find($id);

        if(!$product)
        {
            throw $this->createNotFoundException('Page not found');
        }

        return $this->render('@App/page/show.html.twig', compact('product'));
    }

    public function storeAction(Request $request)
    {
        //\Symfony\Component\HttpFoundation\Request::METHOD_PUT

        return $this->json([
            'status' => 200,
            'message' => 'OK'
        ]);
    }
}
