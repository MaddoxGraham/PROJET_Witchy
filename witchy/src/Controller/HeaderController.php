<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeaderController extends AbstractController
{
    #[Route('/', name: 'app_header')]
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

    #[Route('{slug}', name: 'categorieProducts')]
    public function header(CategorieRepository $categorieRepository): Response
    {
        $categories = $categorieRepository->findAll();
        return $this->render('products/sousCategorie.html.twig', [
            'categories' => $categories,
            
        ]);
    }
}
