<?php

namespace App\DataFixtures;

use App\Entity\Adresse;
use App\Entity\Client;
use App\Entity\Coefficient;
use App\Entity\Commercial;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Faker;


class ClientsFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordEncoder,
        private SluggerInterface $slugger){}
    public function load(ObjectManager $manager): void
    {
        /***CREATE COMMERCIAL ****/

        $commercial = new Commercial();
        $commercial->setNom('Rutheford');
        $commercial->setPrenom('Cullen');
        $commercial->setSpecialisation('particuliers');
        $manager->persist($commercial);


        /***CREATE COEFFICIENT ****/

        $coeff = new Coefficient();
        $coeff->setNomination('particulier');
        $manager->persist($coeff);


        /************Création d'un client ADMIN  *********/
        $admin = new Client();
        $admin->setEmail('Salem.Lavellan@demo.fr');
        $admin->setNom('Lavellan');
        $admin->setPrenom('Salem');
        $admin->setIdCoeff($coeff);
        $admin->setIdCommercial($commercial);
        $admin->setPassword(
            $this->passwordEncoder->hashPassword($admin,'adminisnotthebestpassword')
        );
        $admin->setRoles(['ROLE_ADMIN']);
        $manager->persist($admin);

        /***CREATE ADRESSE ****/
        $adresse = new Adresse();
        $adresse->setIdClient($admin);
        $adresse->setNominationAdresse('Livraison');
        $adresse->setAdresse('6 Hell\' Corner Avenue');
        $adresse->setVille('NightCity');
        $adresse->setCp('66666');
        $adresse->setActif(true);        
        $manager->persist($adresse);


        /************Création d'un client PRODUCT_ADMIN  *********/

        $prodadmin = new Client();
        $prodadmin->setEmail('product@demo.fr');
        $prodadmin->setNom('Rutheford');
        $prodadmin->setPrenom('Cullen');
        $prodadmin->setIdCoeff($coeff);
        $prodadmin->setIdCommercial($commercial);
        $prodadmin->setPassword(
            $this->passwordEncoder->hashPassword($prodadmin,'adminprod')
        );
        $prodadmin->setRoles(['ROLE_PRODUCT_ADMIN']);
        $manager->persist($prodadmin);

        /***CREATE ADRESSE ****/
        $adresse = new Adresse();
        $adresse->setIdClient($prodadmin);
        $adresse->setNominationAdresse('Livraison');
        $adresse->setAdresse('6 Hell\' Corner Avenue');
        $adresse->setVille('Skyhold');
        $adresse->setCp('77777');
        $adresse->setActif(true);        
        $manager->persist($adresse);

        /************Création d'un client NORMAL USER   *********/

        $user = new Client();
        $user->setEmail('d.pavus@demo.fr');
        $user->setNom('Pavus');
        $user->setPrenom('Dorian');
        $user->setIdCoeff($coeff);
        $user->setIdCommercial($commercial);
        $user->setPassword(
            $this->passwordEncoder->hashPassword($user,'pavus')
        );
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);

        /***CREATE ADRESSE ****/
        $adresse = new Adresse();
        $adresse->setIdClient($user);
        $adresse->setNominationAdresse('Livraison');
        $adresse->setAdresse('74 Magister Street');
        $adresse->setVille('Tevinter');
        $adresse->setCp('21547');
        $adresse->setActif(true);        
        $manager->persist($adresse);


        /************************* CREATE USERS **************************/

        $faker = Faker\Factory::create('fr_FR');

            for($usr = 1; $usr<=5;$usr++){

                $user = new Client();
                $user->setEmail($faker->email);
                $user->setNom($faker->lastName);
                $user->setPrenom($faker->firstName);
                $user->setIdCoeff($coeff);
                $user->setIdCommercial($commercial);
                $user->setPassword(
                    $this->passwordEncoder->hashPassword($user,'secret')
                );
                $user->setRoles(['ROLE_USER']);
                $manager->persist($user);
        
                /***CREATE ADRESSE ****/
                $adresse = new Adresse();
                $adresse->setIdClient($user);
                $adresse->setNominationAdresse('Livraison');
                $adresse->setAdresse($faker->streetAddress);
                $adresse->setVille($faker->city);
                $adresse->setCp(str_replace(' ','',$faker->postcode));
                $adresse->setActif(true);        
                $manager->persist($adresse);

            }


        $manager->flush();
    }
}
