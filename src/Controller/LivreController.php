<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Repository\LivreRepository;
use App\Repository\CategorieRepository;
use App\Repository\EditeurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LivreController extends AbstractController
{
    #[Route('/livres', name: 'app_livre_index')]
    public function index(LivreRepository $livreRepository, CategorieRepository $categorieRepository, EditeurRepository $editeurRepository, Request $request): Response
    {
        $categorieId = $request->query->get('categorie');
        $editeurId = $request->query->get('editeur');
        $search = $request->query->get('q');

        // Simple search logic
        $queryBuilder = $livreRepository->createQueryBuilder('l');

        if ($categorieId) {
            $queryBuilder->andWhere('l.categorie = :cat')
                         ->setParameter('cat', $categorieId);
        }

        if ($editeurId) {
            $queryBuilder->andWhere('l.editeur = :ed')
                         ->setParameter('ed', $editeurId);
        }

        if ($search) {
            $queryBuilder->andWhere('l.titre LIKE :search OR l.description LIKE :search')
                         ->setParameter('search', '%'.$search.'%');
        }

        return $this->render('livre/index.html.twig', [
            'livres' => $queryBuilder->getQuery()->getResult(),
            'categories' => $categorieRepository->findAll(),
            'editeurs' => $editeurRepository->findAll(),
        ]);
    }

    #[Route('/livre/{id}', name: 'app_livre_show')]
    public function show(Livre $livre): Response
    {
        return $this->render('livre/show.html.twig', [
            'livre' => $livre,
        ]);
    }
}
