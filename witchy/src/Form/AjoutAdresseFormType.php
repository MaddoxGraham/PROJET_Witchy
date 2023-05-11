<?php

namespace App\Form;

use App\Entity\Adresse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjoutAdresseFormType extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('nomination_adresse', options:[
                'label' => 'Nom de l\'adresse',
            ])
            ->add('adresse', options:[
                'label' => 'Rue'
            ])
            ->add('ville', options:[
                'label' => 'Ville'
            ])
            ->add('cp', options:[
                'label' => 'Code postal'
            ])   
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
        ]);
    }
}