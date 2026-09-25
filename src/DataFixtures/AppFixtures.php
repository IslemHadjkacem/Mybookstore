<?php

namespace App\DataFixtures;

use App\Entity\Auteur;
use App\Entity\Categorie;
use App\Entity\Editeur;
use App\Entity\Livre;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Créer un admin
        $admin = new User();
        $admin->setEmail('admin@mybookstore.com');
        $admin->setNom('Admin');
        $admin->setPrenom('Super');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $manager->persist($admin);

        // Créer un agent
        $agent = new User();
        $agent->setEmail('agent@mybookstore.com');
        $agent->setNom('Agent');
        $agent->setPrenom('Test');
        $agent->setRoles(['ROLE_AGENT']);
        $agent->setPassword($this->passwordHasher->hashPassword($agent, 'agent123'));
        $manager->persist($agent);

        // Créer un abonné
        $abonne = new User();
        $abonne->setEmail('user@mybookstore.com');
        $abonne->setNom('User');
        $abonne->setPrenom('Test');
        $abonne->setRoles(['ROLE_ABONNE']);
        $abonne->setPassword($this->passwordHasher->hashPassword($abonne, 'user123'));
        $manager->persist($abonne);

        // Créer des catégories
        $categories = [
            'Roman' => 'Romans et littérature contemporaine',
            'Science-Fiction' => 'Science-fiction et fantasy',
            'Policier' => 'Romans policiers et thrillers',
            'Histoire' => 'Livres d\'histoire',
            'Science' => 'Ouvrages scientifiques',
        ];

        $categoryEntities = [];
        foreach ($categories as $nom => $description) {
            $categorie = new Categorie();
            $categorie->setNom($nom);
            $categorie->setDescription($description);
            $manager->persist($categorie);
            $categoryEntities[] = $categorie;
        }

        // Créer des éditeurs
        $editeurs = ['Gallimard', 'Flammarion', 'Seuil', 'Albin Michel', 'Pocket'];
        $editeurEntities = [];
        foreach ($editeurs as $nom) {
            $editeur = new Editeur();
            $editeur->setNom($nom);
            $manager->persist($editeur);
            $editeurEntities[] = $editeur;
        }

        // Créer des auteurs
        $auteurs = [
            ['Victor', 'Hugo'],
            ['Albert', 'Camus'],
            ['Émile', 'Zola'],
            ['Marcel', 'Proust'],
            ['Simone', 'de Beauvoir'],
        ];

        $auteurEntities = [];
        foreach ($auteurs as $auteur) {
            $auteurEntity = new Auteur();
            $auteurEntity->setPrenom($auteur[0]);
            $auteurEntity->setNom($auteur[1]);
            $manager->persist($auteurEntity);
            $auteurEntities[] = $auteurEntity;
        }

        // Créer des livres
        for ($i = 0; $i < 20; $i++) {
            $livre = new Livre();
            $livre->setTitre('Livre ' . ($i + 1));
            $livre->setIsbn('ISBN-' . str_pad((string)$i, 10, '0', STR_PAD_LEFT));
            $livre->setDescription('Description du livre ' . ($i + 1));
            $livre->setPrix((string)mt_rand(10, 50));
            $livre->setDatePublication(new \DateTime('-' . mt_rand(1, 365) . ' days'));
            $livre->setStock(mt_rand(0, 100));
            $livre->setEditeur($editeurEntities[array_rand($editeurEntities)]);
            $livre->setCategorie($categoryEntities[array_rand($categoryEntities)]);
            
            // Ajouter 1-3 auteurs aléatoires
            $numAuteurs = mt_rand(1, 3);
            $selectedAuteurKeys = (array)array_rand($auteurEntities, $numAuteurs);
            foreach ($selectedAuteurKeys as $auteurIndex) {
                $livre->addAuteur($auteurEntities[$auteurIndex]);
            }

            $manager->persist($livre);
        }

        $manager->flush();
    }
}
