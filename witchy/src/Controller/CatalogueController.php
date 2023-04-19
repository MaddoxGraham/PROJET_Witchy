<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Doctrine\DBAL\Query\QueryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogueController extends AbstractController
{
    function randStyle(int $count): array
    {
        $colors = array();
        for ($i = 0; $i < $count; $i++) {
            $color = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
            $colors[] = '--clr:' . $color;
        }
        return $colors;
    }


    #[Route('/', name: 'app_catalogue')]
    public function main(CategorieRepository $categorieRepository): Response
    {

        return $this->render('catalogue/index.html.twig', [
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
            ->where('c.parent IS NOT NULL')
            ->getQuery()
            ->getResult(),
        ]);

    }

}