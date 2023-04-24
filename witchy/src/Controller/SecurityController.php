<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, CategorieRepository $categorieRepository): Response
    {

     //   sert à rediriger vers son compte un utilisateur connecté qui click sur connexion
        if ($this->getUser()) {
            return $this->redirectToRoute('app_user_profil');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
        'last_username' => $lastUsername,
        'surCategories' => $categorieRepository->findBy(['parent' => null]),
        'SubCategories' => $categorieRepository->createQueryBuilder('c')
        ->where('c.parent IS NOT NULL')
        ->getQuery()
        ->getResult(),
        'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
