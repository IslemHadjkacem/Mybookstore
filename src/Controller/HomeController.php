<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(\App\Repository\LivreRepository $livreRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'livres' => $livreRepository->findBy([], ['id' => 'DESC'], 6),
        ]);
    }
}
