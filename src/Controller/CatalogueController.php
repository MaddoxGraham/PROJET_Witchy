<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/', name:'witchy_')]
class CatalogueController extends AbstractController
{


    #[Route('/', name: 'index')]
    public function main(CategorieRepository $categorieRepository, ProduitRepository $produitRepository): Response
    {
        // Récupérer tous les produits de la base de données
        $produits = $produitRepository->findAll();
        // Sélectionner aléatoirement 12 produits
        $randomKeys = array_rand($produits, 8);
        $randomProducts = array_intersect_key($produits, array_flip($randomKeys));

        return $this->render('catalogue/index.html.twig', [
            'produits' => $randomProducts,
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
        ]);
    }
}
