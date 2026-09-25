<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class CommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commande::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            
            // Proxy Field : On utilise la propriété virtuelle String
            TextField::new('dateCommandeProxy', 'Date de Commande')
                ->setFormType(DateTimeType::class)
                ->setFormTypeOptions([
                    'widget' => 'single_text',
                    'input' => 'string',
                ])
                ->formatValue(function ($value, $entity) {
                    return $entity->getDateCommande() ? $entity->getDateCommande()->format('d/m/Y H:i') : '';
                }),
                
            TextField::new('statut'),
            MoneyField::new('montantTotal')->setCurrency('EUR'),
            AssociationField::new('user'),
            AssociationField::new('ligneCommandes')->hideOnForm(),
        ];
    }
}
