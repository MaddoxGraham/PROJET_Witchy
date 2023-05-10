<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use App\Entity\Produit;
use App\Form\ProductsFormType;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/products', name: 'admin_products_')]
class ProductsController extends AbstractController{

    #[Route('/', name:'index')]
    public function index(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        return $this->render('admin/products/index.html.twig',[
            'produits' => $produitRepository->findBy([],['id' => 'asc']), 
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
        'SubCategories' => $categorieRepository->createQueryBuilder('c')
        ->where('c.parent IS NOT NULL')
        ->getQuery()
        ->getResult(),
        ]);
    }

    #[Route('/add', name:'add')]
    public function add(CategorieRepository $categorieRepository, Request $request, EntityManagerInterface $em, SluggerInterface $slugger): Response
    {

        //création d'un nouveau produit 
        $product = new Produit();

        // Création du formulaire 
        $productform = $this->createForm(ProductsFormType::class, $product);

        //On traite la requête du formulaire
        $productform->handleRequest($request);
       
        // Vérification si formulaire est soumis et valide 
        if($productform ->isSubmitted() && $productform->isValid()){
            //Création du slug 
            $slug = $slugger->slug($product->getShortLibel());
            $product->setSlug($slug);

            $em->persist($product);
            $em->flush();
            $this->addFlash('Success', 'Product added with success !');
            
            //on redirige 
            return $this->redirectToRoute('admin_products_index');
        }

        return $this->render('admin/products/add.html.twig',[
            'productform' => $productform->createView(),
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
        ]);
        
    }

    #[Route('/edit/{id}', name:'edit')]
    public function edit(Produit $product,CategorieRepository $categorieRepository, Request $request, EntityManagerInterface $em, SluggerInterface $slugger, PictureService $pictureService): Response
    {

        // Création du formulaire 
        $productform = $this->createForm(ProductsFormType::class, $product);

        //On traite la requête du formulaire
        $productform->handleRequest($request);
       
        // Vérification si formulaire est soumis et valide 
        if($productform ->isSubmitted() && $productform->isValid()){

            //Récupération des images 
            $photos = $productform->get('photos')->getData();
            $cpt=1;
            foreach ($photos as $photo) {
                $folder = 'products';     
                $fichier=$pictureService->add($photo,$folder,300,300);
                $img = new Photo();
                $img->setSrc($fichier);
                $product->addPhoto($img);


                if($cpt==1 ){
                    $img->setIsPrimary(1);
                }else{
                    $img->setIsPrimary(0);
                }
                $cpt++;

            }   
            //Création du slug 
            $slug = $slugger->slug($product->getShortLibel());
            $product->setSlug($slug);

            $em->persist($product);
            $em->flush();
            $this->addFlash('Success', 'Product Edited with success !');
            
            //on redirige 
            return $this->redirectToRoute('admin_products_index');
        }

        return $this->render('admin/products/edit.html.twig',[
            'productform' => $productform->createView(), 
            'produit' => $product,
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
        ]);
        
        
    }
    #[Route('/delete/{id}', name:'delete')]
    public function delete(CategorieRepository $categorieRepository, Produit $product): Response
    {
        return $this->render('admin/products/index.html.twig',[
            'surCategories' => $categorieRepository->findBy(['parent' => null]),
            'SubCategories' => $categorieRepository->createQueryBuilder('c')
                ->where('c.parent IS NOT NULL')
                ->getQuery()
                ->getResult(),
        ]);
        
    }
}