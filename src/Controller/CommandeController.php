<?php

namespace App\Controller;

use App\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ABONNE')]
class CommandeController extends AbstractController
{
    #[Route('/mes-commandes', name: 'app_commande_index')]
    public function index(): Response
    {
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        return $this->render('commande/index.html.twig', [
            'commandes' => $user->getCommandes(),
        ]);
    }

    #[Route('/mes-commandes/{id}', name: 'app_commande_show')]
    public function show(Commande $commande): Response
    {
        // Vérifier que la commande appartient bien à l'utilisateur connecté
        if ($commande->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Vous n\'avez pas accès à cette commande.');
        }

        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }
}
