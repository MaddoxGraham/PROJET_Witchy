<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('navbar', name: 'app_header_')]
class HeaderController extends AbstractController
{
    #[Route('/', name: 'navbar')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('header/index.html.twig', [
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
            ->where('c.parent IS NOT NULL')
            ->getQuery()
            ->getResult(),
        ]);
    }

    #[Route('/{slugCat}/{slugSousCat}', name: 'categorieProducts')]
    public function categorieProducts(string $slugCat, string $slugSousCat, CategorieRepository $categorieRepository, ProduitRepository $productRepository): Response
    {
        $sousCategorie = $categorieRepository->findOneBy(['slug' => $slugSousCat]);
        $produits = $productRepository->findBy(['categorie' => $sousCategorie]);
        return $this->render('products/sousCategorie.html.twig', [
            'categories' => $categorieRepository->findAll(),
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
            'produits' => $produits,
        ]);
    }

}
