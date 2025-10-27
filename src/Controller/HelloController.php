<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return new Response('Hello, World!');
    }

    #[Route('/messages/{id<\d+>}', name: 'app_message')]
    public function message(int $id): Response
    {
        return $this->render('hello/show_one.html.twig', [
            'name' => $id,
        ]);
    }
}
