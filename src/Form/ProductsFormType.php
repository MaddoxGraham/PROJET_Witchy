<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Repository\CategorieRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ShortLibel', options:[
                'label'=> 'Product\'s name'
            ])
            ->add('LongLibel', options:[
                'label'=> 'Product\'s description'
            ])
            ->add('prxHt', options:[
                'label'=> 'Product\'s price'
            ])
            ->add('categorie', EntityType::class,[
                'class' => Categorie::class,
                'choice_label'=>'nomination',
                'label'=> 'Product\'s category',
                'group_by' => 'parent.nomination',
                'query_builder'=> function(CategorieRepository $cr){
                    return $cr->createQueryBuilder('c')
                    ->where('c.parent IS NOT NULL')
                    ->orderBy('c.id','ASC');
                }
            ])
            ->add('photos',FileType::class, [
                'label'=>false,
                'multiple'=>true,
                'mapped'=>false,
                'required'=>false
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
