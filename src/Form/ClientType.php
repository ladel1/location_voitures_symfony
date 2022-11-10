<?php
/**
 * importer les entités depuis une BDD existante
 * source: 
 *  https://ourcodeworld.com/articles/read/1386/how-to-generate-the-entities-from-a-database-and-create-the-crud-automatically-in-symfony-5
 *  https://ourcodeworld.com/articles/read/1314/how-to-automatically-generate-the-doctrine-repository-class-of-an-entity-in-symfony-5
 * 
 */
namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse')
            ->add('neph')
            ->add('nom')
            ->add('prenom')
            ->add('tel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
