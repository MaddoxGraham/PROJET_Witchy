<?php

namespace App\Controller;

use App\Entity\Historique;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user', name: 'app_user_')]
class UserController extends AbstractController
{
    #[Route('/', name: 'profil')]
    public function index(CategorieRepository $categorieRepository, EntityManagerInterface $entityManager): Response
    {

        $user = $this->getUser();
        $historiqueRepository = $entityManager->getRepository(Historique::class);
        $historiqueClient = $historiqueRepository->findBy(['idClient' => $user]);

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
            'historiqueClient' =>   $historiqueClient,
        ]);
    }

}
