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
        $cart= $session->get("cart",[]);
        $dataCart= [];
        $total = 0;

        foreach ($cart as $id => $quantite) {
            $product = $produitRepository->find($id);
            $dataCart = [
                "produit" => $product,
                "quantite" => $quantite
            ];
            $total += $product->getPrxHt()*$quantite;
        }
       
        
        return $this->render('cart/index.html.twig', compact("surCategories","SubCategories","dataCart","total"));
    }


    #[Route('/{id}', name: 'add')]
    public function add(Produit $product, $id,SessionInterface $session){
      //recupération du panier actuel
      $cart = $session->get("cart", []);
      $id = $product->getId();

     if(!empty($cart[$id])){
        $cart[$id]++;
     }else{
        $cart[$id]=1;
     }

     //save session
     $session->set("cart",$cart);
     return $this->redirectToRoute("app_cart_index");

        }
}


