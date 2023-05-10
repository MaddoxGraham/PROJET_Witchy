<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;







#[Route('/cart', name: 'app_cart_')]
class CartController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProduitRepository $produitRepository, SessionInterface $session, CategorieRepository $categorieRepository): Response
    {


        $surCategories =  $categorieRepository->findBy(['parent' => null]);
        $SubCategories = $categorieRepository->createQueryBuilder('c')
        ->where('c.parent IS NOT NULL')
        ->getQuery()
        ->getResult();



        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $product = $produitRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrxHt() * $quantite;
        }

        return $this->render('cart/index.html.twig', compact("dataPanier","SubCategories","surCategories", "total"));
    }

    /**
     * @Route("/add/{id}", name="add")
     */
    public function add(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("app_cart_index");
    }

    /**
     * @Route("/remove/{id}", name="remove")
     */
    public function remove(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            if($panier[$id] > 1){
                $panier[$id]--;
            }else{
                unset($panier[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("app_cart_index");
    }

    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Produit $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($panier[$id])){
            unset($panier[$id]);
        }

        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("app_cart_index");
    }

    /**
     * @Route("/delete", name="delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("app_cart_index");
    }
    #[Route('/validate', name: 'validate')]
    public function validate(ProduitRepository $produitRepository, SessionInterface $session, CategorieRepository $categorieRepository): Response
    {

        $surCategories =  $categorieRepository->findBy(['parent' => null]);
        $SubCategories = $categorieRepository->createQueryBuilder('c')
        ->where('c.parent IS NOT NULL')
        ->getQuery()
        ->getResult();

        $panier = $session->get("panier", []);

        // On "fabrique" les données
        $dataPanier = [];
        $total = 0;

        foreach($panier as $id => $quantite){
            $product = $produitRepository->find($id);
            $dataPanier[] = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrxHt() * $quantite;
        }

        return $this->render('cart/validate.html.twig', compact("dataPanier","SubCategories","surCategories", "total"));
    }



}


