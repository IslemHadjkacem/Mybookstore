<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/cart')]
final class CartController extends AbstractController
{
    #[Route('/', name: 'app_cart_index')]
    public function index(CartService $cartService): Response
    {
        return $this->render('cart/index.html.twig', [
            'items' => $cartService->getFullCart(),
            'total' => $cartService->getTotal(),
        ]);
    }

    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(int $id, CartService $cartService): Response
    {
        $cartService->add($id);
        $this->addFlash('success', 'Livre ajouté au panier !');
        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(int $id, CartService $cartService): Response
    {
        $cartService->remove($id);
        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/delete/{id}', name: 'app_cart_delete')]
    public function delete(int $id, CartService $cartService): Response
    {
        $cartService->delete($id);
        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/validate', name: 'app_cart_validate')]
    #[IsGranted('ROLE_ABONNE')]
    public function validate(CartService $cartService, EntityManagerInterface $em): Response
    {
        $fullCart = $cartService->getFullCart();
        if (empty($fullCart)) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('app_cart_index');
        }

        $commande = new Commande();
        $commande->setUser($this->getUser());
        $commande->setStatut('Validée');
        $commande->setMontantTotal((string)$cartService->getTotal());
        $commande->setDateCommande(new \DateTimeImmutable());

        foreach ($fullCart as $item) {
            $ligne = new LigneCommande();
            $ligne->setLivre($item['livre']);
            $ligne->setQuantite($item['quantity']);
            $ligne->setPrixUnitaire($item['livre']->getPrix());
            $ligne->setCommande($commande);
            $em->persist($ligne);
        }

        $em->persist($commande);
        $em->flush();

        $cartService->clear();
        $this->addFlash('success', 'Commande validée avec succès ! Retrouvez-la ici.');

        return $this->redirectToRoute('app_commande_index');
    }
}
