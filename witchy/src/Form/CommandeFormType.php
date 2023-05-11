<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeFormType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $idClient = $options['data']->getId();

        $builder

            ->add('nomination_adresse', EntityType::class, [
                'class' => Adresse::class,
                'mapped' => false,
                'choice_label' => 'nomination_adresse',
                'label' => 'Adresse de livraison',
                'query_builder' => function ($repo) use ($idClient) {
                    return $repo->createQueryBuilder('a')
                    ->where('a.idClient = :id')
                    ->setParameter('id', $idClient);
                }
            ])
            ->add('nomination_adresse2', EntityType::class, [
                'class' => Adresse::class,
                'mapped' => false,
                'choice_label' => 'nomination_adresse',
                'label' => 'Adresse de facturation',
                'query_builder' => function ($repo) use ($idClient) {
                    return $repo->createQueryBuilder('a')
                    ->where('a.idClient = :id')
                    ->setParameter('id', $idClient);
                }
            ])
            ->add('moyen_paiement', ChoiceType::class, [
                'label' => 'Moyen paiement',
                'mapped' => false,
                'choices' => [
                    'chèque' => 'Chèque',
                    'virement' => 'Virement'
                ]
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            
        ]);
    }
}