<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\Commande;
use App\Entity\Facture;
use App\Entity\Historique;
use App\Entity\Livraison;
use App\Entity\Produit;
use App\Form\AjoutAdresseFormType;
use App\Form\CommandeFormType;
use App\Repository\AdresseRepository;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use DateInterval;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    

    #[Route('/validation', name: 'validate')]
    public function validation(SessionInterface $session,CategorieRepository $categorieRepository, ProduitRepository $produitRepository, AdresseRepository $adresses, Request $request, EntityManagerInterface $entityManager,): Response
    {

        $panier = $session->get('panier', []);

        //on "fabrique" les données
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
        
        $user = $this->getUser();
                if ($user == null) {
           return $this->redirectToRoute("app_login");
        }else{


        $userAdresse = $adresses->find(1);
        $session->set('userAdresse', $userAdresse);

        $commandeForm = $this->createForm(CommandeFormType::class, $user);
        $commandeForm->handleRequest($request);

        $ajoutAdresseForm = $this->createForm(AjoutAdresseFormType::class);
        $ajoutAdresseForm->handleRequest($request);

        // Rajout d'une adresse

        $adresse = new Adresse();

        if ($ajoutAdresseForm->isSubmitted()) {
            $data = $ajoutAdresseForm->getData();
            
            $adresse->setIdClient($user);
            $adresse->setNominationAdresse($data->getNominationAdresse());
            $adresse->setAdresse($data->getAdresse());
            $adresse->setVille($data->getVille());
            $adresse->setCp($data->getCp());
            $adresse->setActif(true);
            $entityManager->persist($adresse);
            $entityManager->flush();
        }
        
        //création d'une nouvelle commande
        $commande = new Commande();
        $facture = new Facture();
        $historique = new Historique();
        $livraison = new Livraison();
        $date = new DateTimeImmutable();
        $datepro = $date->add(new DateInterval('P30D'));
 
        if($commandeForm->isSubmitted()) {
           
            $adresseLivraison = $commandeForm->get('nomination_adresse')->getData();
            $adresseFacturation = $commandeForm->get('nomination_adresse2')->getData();
            $moyenPaiement = $commandeForm->get('moyen_paiement')->getData();

            
            $commande->setClient($user);
            $commande->setTotalTtc($total);
            $commande->setStatut('terminé');
            $commande->setDateCom($date);
            $entityManager->persist($commande);
            $facture->setIdCom($commande);
            $facture->setIdAdresse($adresseFacturation);
            if($user->getRaisonSociale() == null){
                $facture->setDelaiPaiement(0);
                $facture->setModePaiement('cb');
                $facture->setDatePaiement($date);
            } else{
                $facture->setDelaiPaiement(90);
                $facture->setModePaiement($moyenPaiement);
                $facture->setDatePaiement($datepro);
            }
            $entityManager->persist($facture);
            
            $livraison->setIdCom($commande);
            $livraison->setDateLivraison($datepro);
            $entityManager->persist($livraison);
            
            $historique->setIdClient($user);
            $historique->setIdCom($commande);
            $historique->setNomHistorique($user->getNom());
            $historique->setPrenomHistorique($user->getPrenom());
            $historique->setMailHistorique($user->getEmail());
            $historique->setTelephoneHistorique($user->getTelephone());
            if($user->getRaisonSociale() == null){
                $historique->setRaisonSocialeHistorique(null);
            } else{
                $historique->setRaisonSocialeHistorique($user->getRaisonSociale());
            }
            
            $entityManager->persist($historique);
            $entityManager->flush();

            $panier = $session->set('panier', []);      
        return $this->redirectToRoute("witchy_index");
        }

        $surCategories =  $categorieRepository->findBy(['parent' => null]);
            $SubCategories = $categorieRepository->createQueryBuilder('c')
            ->where('c.parent IS NOT NULL')
            ->getQuery()
            ->getResult();


        return $this->render(
            'cart/validate.html.twig',
            [
                'dataPanier' => $dataPanier,
                'total' => $total,
                'user' => $user,
                'produits' => $produitRepository,
                'adresse' => $userAdresse,
                'commandeForm' => $commandeForm->createView(),
                'ajoutAdresseForm' => $ajoutAdresseForm->createView(),
                'surCategories'=>$surCategories,
                'SubCategories'=>$SubCategories,
                
            ]
        );        }
    }

}


