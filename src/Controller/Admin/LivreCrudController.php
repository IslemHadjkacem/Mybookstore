<?php

namespace App\Controller\Admin;

use App\Entity\Livre;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LivreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Livre::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('titre'),
            TextField::new('isbn'),
            TextareaField::new('description'),
            MoneyField::new('prix')->setCurrency('EUR'),
            
            // Proxy Field : On utilise la propriété virtuelle String
            // On configure DateType avec input='string' pour que le formulaire
            // envoie/reçoive du texte compatible avec notre entité.
            TextField::new('datePublicationProxy', 'Date de Publication')
                ->setFormType(DateType::class)
                ->setFormTypeOptions([
                    'widget' => 'single_text',
                    'input' => 'string',
                ])
                // Formatage manuel pour l'affichage en liste (évite le configurateur strict)
                ->formatValue(function ($value, $entity) {
                    return $entity->getDatePublication() ? $entity->getDatePublication()->format('d/m/Y') : '';
                }),
                
            IntegerField::new('stock'),
            ImageField::new('imageCouverture')
                ->setBasePath('uploads/images/livres')
                ->setUploadDir('public/uploads/images/livres')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            AssociationField::new('editeur'),
            AssociationField::new('categorie'),
            AssociationField::new('auteurs'),
        ];
    }
}
