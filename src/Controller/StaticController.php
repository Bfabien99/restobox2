<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home_page(): Response
    {
        return $this->render('static/index.html.twig');
    }

    #[Route('/contact', name: 'contact')]
    public function contact_page(): Response
    {
        return $this->render('static/contact.html.twig');
    }

    #[Route('/a-propos', name: 'a_propos')]
    public function about_page(): Response
    {
        return $this->render('static/about.html.twig');
    }
}
