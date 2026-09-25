<?php

namespace App\Controller\Admin;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Editeur;
use App\Entity\Livre;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_AGENT')]
class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MyBookstore - Administration');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        
        yield MenuItem::section('Gestion du Catalogue');
        yield MenuItem::linkToCrud('Livres', 'fas fa-book', Livre::class);
        yield MenuItem::linkToCrud('Ajouter un Livre', 'fas fa-plus', Livre::class)->setAction('new');
        yield MenuItem::linkToCrud('Auteurs', 'fas fa-user-pen', Auteur::class);
        yield MenuItem::linkToCrud('Éditeurs', 'fas fa-building', Editeur::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-tags', Categorie::class);
        
        yield MenuItem::section('Commandes');
        yield MenuItem::linkToCrud('Toutes les commandes', 'fas fa-shopping-cart', Commande::class);
        
        // Menu utilisateurs uniquement pour ROLE_ADMIN
        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::section('Administration');
            yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        }
        
        yield MenuItem::section('Site');
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-arrow-left', 'app_home');
    }
}
