<?php

namespace App\Controller\Admin;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/users', name: 'admin_user_')]
class UsersController extends AbstractController{

    #[Route('/', name:'index')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('admin/users/index.html.twig',[
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
        ]);
    }
}