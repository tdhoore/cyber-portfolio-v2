<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('content/index.html.twig', [
            'controller_name' => 'ContentController',
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('content/about.html.twig', [
            'controller_name' => 'ContentController',
        ]);
    }

    /**
     * @Route("/work", name="work")
     */
    public function work(): Response
    {
        return $this->render('content/work.html.twig', [
            'controller_name' => 'ContentController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('content/contact.html.twig', [
            'controller_name' => 'ContentController',
        ]);
    }
}
