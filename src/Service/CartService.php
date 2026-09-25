<?php

namespace App\Service;

use App\Repository\LivreRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{
    private $session;
    private $livreRepository;

    public function __construct(RequestStack $requestStack, LivreRepository $livreRepository)
    {
        $this->session = $requestStack->getSession();
        $this->livreRepository = $livreRepository;
    }

    public function add(int $id): void
    {
        $cart = $this->session->get('cart', []);
        
        if (!empty($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        $this->session->set('cart', $cart);
    }

    public function remove(int $id): void
    {
        $cart = $this->session->get('cart', []);
        
        if (!empty($cart[$id])) {
            if ($cart[$id] > 1) {
                $cart[$id]--;
            } else {
                unset($cart[$id]);
            }
        }

        $this->session->set('cart', $cart);
    }

    public function delete(int $id): void
    {
        $cart = $this->session->get('cart', []);
        
        if (!empty($cart[$id])) {
            unset($cart[$id]);
        }

        $this->session->set('cart', $cart);
    }

    public function getFullCart(): array
    {
        $cart = $this->session->get('cart', []);
        $cartWithData = [];

        foreach ($cart as $id => $quantity) {
            $livre = $this->livreRepository->find($id);
            if ($livre) {
                $cartWithData[] = [
                    'livre' => $livre,
                    'quantity' => $quantity
                ];
            }
        }

        return $cartWithData;
    }

    public function getTotal(): float
    {
        $total = 0;
        $cartWithData = $this->getFullCart();

        foreach ($cartWithData as $item) {
            $total += $item['livre']->getPrix() * $item['quantity'];
        }

        return $total;
    }

    public function clear(): void
    {
        $this->session->set('cart', []);
    }
}
