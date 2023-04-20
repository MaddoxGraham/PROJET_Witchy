<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/products', name:'app_products_')]
class ProductsController extends AbstractController{


    #[Route('/', name:'index')]
    public function index(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        return $this->render('products/index.html.twig',[
            'produits' => $produitRepository->findBy([],['id' => 'asc']), 
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
        'SubCategories' => $categorieRepository->createQueryBuilder('c')
        ->where('c.parent IS NOT NULL')
        ->getQuery()
        ->getResult(),
        ]);
    }
    
    #[Route('/{slug}', name: 'details')]
    public function details(Produit $produit,ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response{
        $categoriesProduit = $produitRepository->findBy(['categorie' => $produit->getCategorie()]);
        $surCategories = $categorieRepository->findBy(['parent' => null]);
        $SubCategories = $categorieRepository->createQueryBuilder('c')
                        ->where('c.parent IS NOT NULL')
                        ->getQuery()
                        ->getResult();;

    return $this->render('products/details.html.twig', compact('produit', 'categoriesProduit', 'surCategories', 'SubCategories'));
    }

    // public function sousCategorie($slug)
    // {
    //     // récupérer la sous-catégorie correspondante au slug
    //     $sousCategorie = $this->getDoctrine()->getRepository(SousCategorie::class)->findOneBy(['slug' => $slug]);
    
    //     // vérifier si la sous-catégorie existe
    //     if (!$sousCategorie) {
    //         throw $this->createNotFoundException('La sous-catégorie n\'existe pas');
    //     }
    
    //     // récupérer tous les produits de la sous-catégorie
    //     $produits = $this->getDoctrine()->getRepository(Produit::class)->findBy(['sousCategorie' => $sousCategorie]);
    
    //     // afficher la page de la sous-catégorie avec les produits correspondants
    //     return $this->render('products/sousCategorie.html.twig', [
    //         'produits' => $produits,
    //         'sousCategorie' => $sousCategorie
    //     ]);
    // }
    


}