<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Photo;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Validator\Constraints\Length;

class ProduitsFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger)
    {
        
    }
    public function load(ObjectManager $manager): void
    {
      

 $produit = $this->createProduct(
  'Academia Dark Academia Robe en tartan à bouton ',
  'Couleur: Multicolore.Style: Casual.Type de motif:Carreau.détails:Avec boutons devant.Type:Trapèze.Type du col:Revers.Longueur des manches:Manches courtes.Type de manches:Classiques.Tour de taille:Taille haute.Ourlet/finition:Évasé.Longueur:Court.Type d\'ajustement:Coupe régulière.Tissu:Pas de l\'extensibilité.Tissu/matériel:Tissu tissé.Composition:100% Polyester.Instructions d\'entretien:Lavage à la main ou nettoyage à sec professionnel.Transparent:Non ',
  57.99,
  6,
  [
    'https://img.ltwebstatic.com/images3_pi/2022/10/18/1666062772a8652467ad2ebfa7fd41879694c2ac3b_thumbnail_600x.webp',
    'https://img.ltwebstatic.com/images3_pi/2022/10/18/16660627758ff9c17ef85cf264565b30d21a019f7d_thumbnail_600x.webp',
    'https://img.ltwebstatic.com/images3_pi/2022/10/18/1666062778680872df4b52b8b90d87f85c2f97b16f_thumbnail_600x.webp',
    'https://img.ltwebstatic.com/images3_pi/2022/10/18/1666062785c4f3118b59348206129af8b58572358f_thumbnail_600x.webp',
    'https://img.ltwebstatic.com/images3_pi/2022/07/28/1658980919e96347eda3b4fc793a99c6371a0ef47b_thumbnail_600x.webp'
],
  $manager);

 $produit = $this->createProduct('Element Cats: Air Plush Toy ',
  'Be blown away by the adorable plushie . With their soft velvety fur and super plush soft white accents, standing at 30cm tall. Detailed in stunning pale blue embroidered details and glistening light blue eyes you simply must breathe in their cuteness!  ',
39.95,
24,
[
  'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/ELEMENTAL-CATS-AIR-B_500x.jpg?v=1677587307',
  'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/Elemental-Cats-Air-Plush-Toy-G_500x.jpg?v=1677587307',
  'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/Elemental-Cats-Air-Plush-Toy-B.jpg?v=1677587307'
],
$manager);


$produit = $this->createProduct('B.L.P-04/CMR',
'Pants Material with Taslan RED Mix with polyester.Material : TASLAN RED Mix Polyester [ WATER PROOF ].Model Weight / Height : 75 kg / 175 cm.GET ADD 2 COLOR STRAP : BLACK AND RED',
160.00,
11,
[
'https://cdn.shopify.com/s/files/1/0083/1530/6048/products/BLP04CMRX.jpg?v=1620472700&width=1680',
'https://cdn.shopify.com/s/files/1/0083/1530/6048/products/BLP04CMR2.jpg?v=1620495042&width=1680',
'https://cdn.shopify.com/s/files/1/0083/1530/6048/products/bvlp04cmr3.jpg?v=1620495119&width=1680',
'https://cdn.shopify.com/s/files/1/0083/1530/6048/products/sizechartblp04_48794d12-08d7-4cbd-9afd-d57380a5cd57.jpg?v=1627890177&width=1680'
],
$manager);

$produit = $this->createProduct(' Panic Platform Shoes ',
'Tired of \'vanilla\' footwear? The "Panic" platform shoes from Killstar are here to spice it up! These stunners feature a striking glossy black body, and a multi-strap design with statement pentagram buckles to give a touch of edginess to any outfit, while the inside zip closure and the adjustable straps ensure a comfortable fit. The low-cut toe is extremely flattering on the foot and with a towering chunky heel and a thick platform, they are a must-have for night outs, photoshoots, or parties. With these killer heels world domination is a given!',
128.88,
14,
[
'https://fantasmagoria.shop/99046/panic-platform-shoes.jpg',
'https://fantasmagoria.shop/99047/panic-platform-shoes.jpg',
'https://fantasmagoria.shop/99048/panic-platform-shoes.jpg',
'https://fantasmagoria.shop/99049/panic-platform-shoes.jpg',
'https://fantasmagoria.shop/99050/panic-platform-shoes.jpg',
'https://fantasmagoria.shop/99302/panic-platform-shoes.jpg'
],
$manager);

$produit = $this->createProduct(' Pricilla Platforms ',
'Channel some seriously cute and magical vibes with the `Pricilla` platforms - in luxurious patent faux leather with a heel, cookie-cutter pattern, and platform. Comfortable and airy - perfect for hot days/nights, dates, and events!',
122.04,
14,
[
'https://fantasmagoria.shop/77711/pricilla-platforms.jpg',
'https://fantasmagoria.shop/77712/pricilla-platforms.jpg',
'https://fantasmagoria.shop/95671/pricilla-platforms.jpg'
],
$manager);

$produit = $this->createProduct(' She\'S Out There Wedges ',
'Get closer to the stars with the \'She\'s Out There\' platform wedges - in a luxe faux leather body, lace-up front with triple velcro straps, padded and stitched back detail, metal alien hardware and 6" thick platform - to elevate your game.Match as your heart desire - yer ready for take-off! with WITCHY Branding, 100% PU/Man-Made Materials.',
108.84,
14,
[
'https://fantasmagoria.shop/67061/shes-out-there-wedges.jpg',
'https://fantasmagoria.shop/67063/shes-out-there-wedges.jpg',
'https://fantasmagoria.shop/67064/shes-out-there-wedges.jpg',
'https://fantasmagoria.shop/67065/shes-out-there-wedges.jpg',
'https://fantasmagoria.shop/67066/shes-out-there-wedges.jpg',
'https://fantasmagoria.shop/67066/shes-out-there-wedges.jpg'
],
$manager);


$produit = $this->createProduct('Four Flies Dress',
'With KILLSTAR branding, 94% Viscose 6% Elastane.Machine wash cold (30°c) / Do not bleach / Do not tumble dry / Iron at low temperature / Do not dry clean / Imported.',
44.95,
6,
[
'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/FOUR-FLIES-DRESS-W-B_500x.jpg?v=1680189653',
'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/FOUR-FLIES-DRESS-W-C_1_500x.jpg?v=1680189653',
'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/FOUR-FLIES-DRESS-W-D_1_500x.jpg?v=1680189653',
'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/FOUR-FLIES-DRESS-W-E_1.jpg?v=1680189653',
'https://cdn.shopify.com/s/files/1/0539/0722/6789/products/FOUR-FLIES-DRESS-W-F_1.jpg?v=1680189653'
],
$manager);

$produit = $this->createProduct(' Charmed Vines Mini Dress - Ivory ',
'Widow Charmed Vines Mini Dress - Ivory cuz you have a magical green thumb. This mini dress has a sheer mesh construction, a flocked floral pattern all over, a mock neckline, a lettuce trim, and comes with matching arm length gloves that have adjustable tie closures.',
78.95,
6,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/79takXPxu3ORiq8mlgtxz1XwR8WyxpvT-24.jpg?v=1677278617',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/yQQwiJrW922U1sgc0HIBWAS7wiuM0bgY-24.jpg?v=1677278617',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/yh09qsZI7TSkK5xAXXHwrx6IaFVTv5P8-24.jpg?v=1677278617',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/DTnBEMpPjh8pf7maSzued6pyuiahzc31-24.jpg?v=1677278617',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/E7jAcKk1gYdQS5OAuRr5FrbSQOdsOjC1-24.jpg?v=1677278617'
],
$manager);

$produit = $this->createProduct(' Echo Rockslide Print Midi Dress ',
'DARKER WAVS Echo Rockslide Print Midi Dress in mixed sheer mesh and fishnet patchwork construction with asymmetrical handkerchief hemline. Adjustable shoulder straps, criss-cross halter tie neckline, and exposed stitching details all over.',
64.00,
6,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/eacoiksr1K1gfjMNZq3o80goxhMLUVeH.jpg?v=1680800932',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/GFC03gLEhvmtYiOlArCaNzBqpNWBXmPu.jpg?v=1680800932',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/zBEfxlks4DX6w4gSnvCJu6zeoyXisXAJ.jpg?v=1680800932',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ocCg71RGe1Z8H6gcP2C3mxryu3jHVlxM.jpg?v=1680800932'
],
$manager);


$produit = $this->createProduct('Am I The Drama Mini Dress ',
'HOROSCOPEZ Am I The Drama Mini Dress cuz you can\'t help it. This mini dress comes with long sleeves, a square neckline, halter neck straps, keyhole cut outs, o-ring details, and a bodycon fit',
53.95,
6,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/UOSScsepSiJATzepGIEtRFSqLTpHGuLU-24.jpg?v=1670534589',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/BGMqJ2CF59UMhdS6iEA4PhtweiT3e1JR-24_bfaa1681-c982-43e0-9853-96be045bf195.jpg?v=1660862617',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/J3dKUxhq0epVCmRRT9mGxwBvKwDix0Vc-24_2b96dc08-0c22-4eca-84da-36a77fd8b2b4.jpg?v=1660862618',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/zpqvi5EYNXEEIkW4mQLU97TEQImk0auC-24_263ae40e-d368-4701-8e76-f24cdc394e6b.jpg?v=1660862618'
],
$manager);

$produit = $this->createProduct(' Let\'s Cause Chaos Mini Dress ',
'Current Mood Let\'s Cause Chaos Mini Dress cuz you\'re down for a little mayhem! Make a statement with this mini dress that has an all over airbrushed clown punk print, a fishnet overlay, a V-neckline, and adjustable shoulder straps.',
50.95,
6,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/0PHWtaeUs97cG0aaQOOYrIjDtL4SRVGO-24.jpg?v=1655918798',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/DL5jjHe6A3h0F9KDMGMIxsZCENZxfpyy-24.jpg?v=1655918798',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/i2ZCmlvKwa2hzms6UNIoN1yL6dQ98pwP-24.jpg?v=1655918798',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/zsjt8iOhFmk7oc9bkXFgD1QxuzHIVcvd-24.jpg?v=1655918798',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/J5AeSGOqxwLFkQm8gVBnzWnGrAwjLkhq-24.jpg?v=1655918798'
],
$manager);

$produit = $this->createProduct(' Glowing Kinetic Kitten Fishnet Dress ',
'Club Exx Glowing Kinetic Kitten Fishnet Dress cuz your energy is contagious, babe. Youâre an atomic muse in this stretchy fishnet mini dress that has long sleeves, a high neckline, and a bodycon fit.',
42.95,
6,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/KhksdmRoWH0JMoRRkT450cRkfAOlq7Q9-24.jpg?v=1651699285',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/rRlZVKoCrUEGBUMIbZawHUbAhlHqpUl9-24.jpg?v=1651699285',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/5ERyZtN7xincERTw2RS9Ak508P4fA2iD-24.jpg?v=1651699285',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/VKe3kd3FSfO6AvhbAhRzpBGKkQfNUtbG-24.jpg?v=1651699285'
],
$manager);

$produit = $this->createProduct(' VRTB-02- Hoodie jaune',
'Oversized sweet jaune. Tissu de l\'univers VRTB-02 Sweat à capuche jaune.60% coton 40% polyester. 10 onces d\'épaisseur.',
140.53,
12,
[
'https://img.staticdj.com/ed322116ff010b8f824d2ac836bc79a8_1080x.jpeg',
'https://img.staticdj.com/735552b77a5eb6c7b5380e615f508ffd_1080x.jpeg',
'https://img.staticdj.com/3ce4d0efba29e8212203f16b4aea5635_1080x.jpeg',
'https://img.staticdj.com/9b4f0d1167e12c879c6cebe3cbb19496_1080x.jpeg',
'https://img.staticdj.com/9d92a49797a21cefab19698d36c80013_1080x.jpeg',
'https://img.staticdj.com/4aa992a93494955a965a7b9cb5a22690_1080x.jpeg',
'https://img.staticdj.com/3608912944b04e911eb05d6a36d60530_1080x.jpeg'
],
$manager);


$produit = $this->createProduct(' Liquid Silver Trinity Boots ',
'Demonia Liquid Silver Trinity Boots cuz you\'ll fuel their robot hearts, babe. These knee high platform boots have a metallic vegan leather construction, tons of adjustable buckle straps down the front with metal plates, and back zip closures.',
184.95,
13,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/kbiEZCHRaN7Xk4EDmCDDoRykoLxxVxg9-24.jpg?v=1660600218',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/pz3Grev8YXppYUtDCWq8qNF47uYaVtPi-24.jpg?v=1660600219',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ar9XqfuX6c4wKOFVBNE2PiAi8He3Eoqb-24.jpg?v=1660600219',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/EF7QIIzZBRnbvtNaIb4t97Lb6617a7cs-24.jpg?v=1660600219'
],
$manager);

$produit = $this->createProduct(' Blindin Pixie Queen Lace Up Heels ',
'Pixie Queen Lace Up Heels cuz you\'re a rare vision of pricey perfection, babe! These chunky platform heels have a glittery rhinestone construction, lace-up wrap straps with adjustable tie closures, and 3D butterfly details all over. **Note: These shoes are hand made and fragi',
114.00,
14,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/shoe1.jpg?v=1680826111',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/LTcxU1PG0rWjY0K4ZNmAzI4N3JRviLfA-24.jpg?v=1677093439',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/OeHa4icKB0G7aX1CEXQElZbw1MRv7rj6-24.jpg?v=1677094035',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/B5AEV3O7pTpGJbJZniOhujQD14ZygmtO-24.jpg?v=1677094035',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/VDlrI26yNSQaBGf33jCnHz4jm6rSSSzN-24_701e647f-f39a-435a-9ae7-2f1500835d3a.jpg?v=1677094035',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/JfmMMW6ZbbwHUn3wvWvZ2EJLuAZzXarl.jpg?v=1680203875',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/shoe2.jpg?v=1680826111',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/shoe3.jpg?v=1680826112'
],
$manager);

$produit = $this->createProduct(' Traitor Boots - Lime Green Holo ',
'Club Exx Traitor Boots - Lime Green Holo cuz you\'re ready for an alien invasion! These wedge platform boots have a holographic construction, zippered stash pockets, adjustable laces, and side zip closures.',
131.90,
13,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Ep2Uxb3z8lnlTB2ghvUItoCBIeRCxAsG-24.jpg?v=1678748842',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/CDe9E4yHu31tglPleYKIwfRbzzeLTZjx-24.jpg?v=1678748842',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/JSZcElgtSanJIR8FS9zCx8xeOKNX4LI0-24.jpg?v=1678748842',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/wllxzrc9SBAJC9EnIhvqB1Tc9yQbKhag-24.jpg?v=1678748842'
],
$manager);

$produit = $this->createProduct(' Fairywalker Platform Sneakers ',
'Sugar Thrillz Fairywalker Platform Sneakers will bring \'em right back to reality, bb! Playtime is over in these chunky platform sneakers that have holographic panels, adjustable lace-ups, and velcro strap closures with heart-shaped trim.',
139.95,
13,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/1adwwd9smHoevIJIHW8J1V6INPMWn35I.jpg?v=1681497639',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ybrKSAg6vbPs7qlynUId7DwnewcQD1Ep.jpg?v=1681497632',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/TNbaBxFZarfkGxgvIDBjNFVSofpBHTyr.jpg?v=1681497624',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/0Jj7xIF7Nf7TBUl8PDhr30eFYv03P83l.jpg?v=1681497635',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/IG3MTqjUxcmBJOG1sopVBHoKViJYRNNf.jpg?v=1681497628'
],
$manager);


$produit = $this->createProduct(' Neon Jawbreaker Traitor Boots ',
'Club Exx Neon Jawbreaker Traitor Boots make their jaws drop, babe! You are lethal on the dance floor in these wedge platform boots that have a contrast neon green design all over, a vegan leather construction, adjustable lace-ups, and side zip closures.',
158.85,
13,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/S403838_0061_23-03-30.jpg?v=1680306083',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/S403838_0064_23-03-30.jpg?v=1680306083',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/S403838_0063_23-03-30.jpg?v=1680306083',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/S403838_0062_23-03-30.jpg?v=1680306083'
],
$manager);

$produit = $this->createProduct(' Hold Me Tight Platform Heels ',
'Sugar Thrillz Hold Me Tight Platform Heels never let me go! Float away in these platform heels that have a patent vegan leather construction, 3D heart-shaped balloon appliques all over, teddy bear embroidered patches at sides, sparkling rhinestones and star details, and adjustable ankle strap',
166.95,
14,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/wi2ZnM8Gqyc18A97JoKqw7wzgvjhjoun-24.jpg?v=1657912738',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/OQBExJGhkeF4dTnnzqtbO2GxqzqlIBib-24.jpg?v=1657912738',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/73pCqyu0SaRqXbJ2gcAJkPGK0KOFh5sw-24.jpg?v=1657912738',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/TLa1OLZJK9l5uDOEk3PmRIX2rZGeeu08-24.jpg?v=1657912738',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/LONVfS1g8SzHJhaw9oqmvbo9Pcbmiyxo-24.jpg?v=1657912738'
],
$manager);



$produit = $this->createProduct(' Holy Revelation Platform Heels - Mint ',
'These platform heels have a crushed velvet construction, pearl beaded details all over with heart and cross charms, and adjustable velcro strap closures at the ankles.',
90.95,
14,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ONzWZq8af7Xky7weHiEXWDdREM4aflEM-24.jpg?v=1678309302',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/vsIme8b2LHfHKitRsvKMpTLJ9aq7hj5W-24.jpg?v=1678309302',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/YaA7JOVz7GsdmV3zjgVtjEg8SHuvLCWE-24.jpg?v=1678309302',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/MlPhFlN7xGRhhADnuiIr834SQrg5YdSy-24.jpg?v=1678309302'
],
$manager);

$produit = $this->createProduct('Gentle Encouragement Plush Crossbody Bag',
'Dolls Kill x Care Bears Gentle Encouragement Plush Crossbody Bag get by with a little help from your friends! This Cheer Bear crossbody bag has a plush faux fur construction, a rainbow embroidered at front, a back zip closure, a branded heart detail at back, and adjustable and detachable straps to also wear it as a backpack.',
50.90,
17,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/GaKu9FcD37pckOeQsomf6JcfOIyhF984-24.jpg?v=1676496310',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/tBrOCaopTqFlUOUf0umMOfSWNffr0eHa-24.jpg?v=1676506746',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/IiQyQYpwAZXzmH3q9tgENIDaVe4wQ4Do-24.jpg?v=1676496310',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/EXLoU9DBoymlb3yrOVrjFwOWOIqwfQOC-24.jpg?v=1676496310',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/8SW0GIhtRCeuVNCsruIY7c2U6FQdxbuW-24.jpg?v=1676496310'
],
$manager);

$produit = $this->createProduct(' Sour Fuck Boys Bag ',
'Current Mood Sour Fuck Boys Bag cuz the crew\'s all here for ya, so let\'s eat \'em alive! This shoulder bag has a patent vegan leather construction with a candy bag inspired shape, top zip closure, little gummy dude graphics all over, graphic lettering on the front and back, and a wo',
50.95,
17,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/gaOGxYkyK0JvbjcYkhD6zuOqHljWjc4F-24.jpg?v=1675366809',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ILRm2upzRe7Gn8PF5bdV2WUDvtDLQxK3-24.jpg?v=1675366810',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/H4OQd8IFacuHpEz7y4cko09GH6gnDdfs-24_e235c700-2d6c-45c6-a385-21c8f71d3ddc.jpg?v=1675366810',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/fboy.jpg?v=1679430396',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/pIVtoqwulogt88fxTfRWtwsTbAIpBic5-24.jpg?v=1675366810',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/fboy3.jpg?v=1679430397',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/eOLWrNRpcwiIMUf344Ze89ZforoXrgW0-24_a089e0a6-ce13-4120-b40d-0def8b17fbac.jpg?v=1675366810',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/fboy4.jpg?v=1679430396'
],
$manager);

$produit = $this->createProduct(' Powerpuff Hotline Crossbody Bag ',
'Dolls Kill x The Powerpuff Girls Powerpuff Hotline Crossbody Bag trouble is calling! Channel your inner Powerpuff with this telephone bag that comes in a glittery vegan leather construction, face graphic details, a thought bubble keychain zip closure, and a 3.5mm headphone jack to plug into your phone. An adapter can be used for phones with different sized headphone jacks.',
76.95 ,
17,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/anHOgsmoKStPNHerMTvDC0C117fIluiO-24.jpg?v=1655141159',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/6LpAvG9aDIHkTiibr2OksMWPuiAou7fW-24.jpg?v=1655141159',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Suq6DwKHaJr7zYkcg4wZmrmNp5wHU3cV-24_50fb873c-d903-4e35-8088-87a11258b0c7.jpg?v=1655227199'
],
$manager);

$produit = $this->createProduct('KRMLN Type -Genesis 1- Veste coupe-vent imperméable Cyberpunk ',
'Les tailles sont mesurées en cm et non en pouces, veuillez mesurer soigneusement
Avant de passer une commande, assurez-vous d\'utiliser notre tableau des tailles pour mesurer, n\'utilisez pas votre tableau des tailles habituel ou un autre tableau des tailles de marque !


Détails du produit:
- Matière Taslan JN Polyester
- Coupe-vent et résistant à l\'eau
- 3 poches extérieures et 1 poche intérieure
-Conception unisexe
 ',
137.43,
12,
[
  'https://i.etsystatic.com/35365753/r/il/64d6ff/3876613934/il_1140xN.3876613934_86fo.jpg',
'https://i.etsystatic.com/35365753/r/il/6270f9/3876613930/il_1140xN.3876613930_beix.jpg',
'https://i.etsystatic.com/35365753/r/il/111598/3876613924/il_1140xN.3876613924_g16d.jpg',
'https://i.etsystatic.com/35365753/r/il/b4376d/3876613922/il_1140xN.3876613922_cds1.jpg',
'https://i.etsystatic.com/35365753/r/il/60ad2a/4320217855/il_1140xN.4320217855_e6er.jpg',
'https://i.etsystatic.com/iap/5e8332/4744465705/iap_300x300.4744465705_oh9gr0oo.jpg?version=0'
],
$manager);

$produit = $this->createProduct('Necro cyber call bodysuit Armor',
'Club Exx Defy Gravity Holographic Bodysuit make like space and let go! This bodysuit has a stretchy construction with disco ball-inspired holographic detailing, fixed shoulder straps, side cutouts, and a back zip closure with an O-ring pull and ribbons. ',
109.74,
9,
[
'https://i.etsystatic.com/12822214/r/il/a1b2cd/4277228429/il_1140xN.4277228429_1jbx.jpg',
'https://i.etsystatic.com/12822214/r/il/3e4697/4277232473/il_1140xN.4277232473_24n4.jpg',
'https://i.etsystatic.com/12822214/r/il/178691/4277228437/il_1140xN.4277228437_h1cv.jpg',
'https://i.etsystatic.com/12822214/r/il/484754/4277228445/il_1140xN.4277228445_9h3l.jpg',
'https://i.etsystatic.com/12822214/r/il/05af42/4229572450/il_1140xN.4229572450_njmy.jpg'
],
$manager);

$produit = $this->createProduct(' Aqua Great Unknown Metallic Bodysuit ',
'Club Exx Aqua Great Unknown Metallic Bodysuit gotcha traveling to undiscovered dimensions. This halter bodysuit has a stretchy metallic construction, a plunging neckline with criss cross accents, a cheeky bottom, and adjustable back tie closures.',
109.74,
9,
[
'https://i.etsystatic.com/12822214/r/il/e58d54/3396300923/il_1140xN.3396300923_a3md.jpg',
'https://i.etsystatic.com/12822214/r/il/45b9f8/3396301317/il_1140xN.3396301317_r6gl.jpg',
'https://i.etsystatic.com/12822214/r/il/1ec2c0/3348603848/il_1140xN.3348603848_erd4.jpg',
'https://i.etsystatic.com/12822214/r/il/f99ad8/3348603842/il_1140xN.3348603842_insn.jpg',
'https://i.etsystatic.com/12822214/r/il/d5dc5c/3396300927/il_1140xN.3396300927_4wub.jpg'
],
$manager);

$produit = $this->createProduct(' Dream Crusher Clear Skirt ',
'Club Exx Dream Crusher Clear Skirt cuz you\'re breakin all the hearts and rules, babe! This clear holographic mini skirt has a structured PVC construction, a belted waistline with a high rise fit, and a side zip closure.',
53.40,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Yg0pr9iTnTaqtShXBmJ590H2aRbaOBCW-24.jpg?v=1649434470',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/zIekLbIa4eNwMv4MNhQOI46ybd346YVE-24.jpg?v=1649434470',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/SeQVUNJ32VB8Vg8Hm3FPAyB0BZzgj7ky-24.jpg?v=1649434470',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Br0YSO1U9XEHjL1eucvlGixrsVCfJrct-24.jpg?v=1649434470'
],
$manager);

$produit = $this->createProduct(' Rainbow Mini Skirt ',
'NGOrder Rainbow Mini Skirt cuz you\'re a glass half full kinda girl. This mini skirt comes with a high waist, stretch fit, and a sky and rainbow print.',
50.95,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ToAvAxoxZkw6MBfYTgjWe4hIeRuBjAE2-24.jpg?v=1654715172',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Q9tsGBlwYqVCFm8d7VE5pRbPnGYEsxq4-24.jpg?v=1654715172',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/O0OpxYLhJk5hRXepOkDT0q4Ie4naswSu-24.jpg?v=1654715172',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ZkZ1fRsGDllnJtgOeloErV6O3eBogQaF-24.jpg?v=1654715172'
],
$manager);

$produit = $this->createProduct(' Lavender Siren Calling Metallic Flares ',
'Club Exx Lavender Siren Calling Metallic Flares gotcha feelin\' like a mystical mermaid! Dive into the magic with these metallic shimmer flare pants that have a low rise fit, ruched seams on the front and back, and a V-cut waistband with tie strap details.',
76.95,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/m6ePJDtiPZsl8bMA1Cs3XX61n3hfw700-24.jpg?v=1676419713',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/Wsw7Q7k1cguNuOgTVfVDij0C3B7opKPx-24.jpg?v=1676419713',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/0WgXEGZ81FbZo58XCEcRQ9kRwcBwDmaA-24.jpg?v=1677268172',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/RhLKqV71dqvWfRHbJO2F7cefmsJ6Ya6L-24.jpg?v=1676419713',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/oq91orvHXapOFXC9SC4vp5TGZstFb5av-24.jpg?v=1676419713'
],
$manager);


$produit = $this->createProduct(' Stardust Showdown Strappy Flares - Neon Green ',
'Club Exx Stardust Showdown Strappy Flares - Neon Green cuz you\'re a glittering goddess! These bell bottom pants have a sheer mesh construction, a built-in cheeky panty, a strappy cutout waist, and sparkly rhinestones all over.',
84.95,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/ODWBh0JGf8LyBARMx2mORbl75PBLGI3d-24.jpg?v=1678748701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/SOJhpsxRGt2pTza6n8IKY5233oLrP1WY-24.jpg?v=1678748701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/4xC1iWQnOYFWqvF795CgIyYfHhb6g6SC-24.jpg?v=1678748701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/rX6srXgwStTZABwoiieQGetoZU2OhFQl-24.jpg?v=1678748701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/pML8wislhn4jM36wQ5fiZqxLZfDbJkko-24.jpg?v=1678748701'
],
$manager);

$produit = $this->createProduct(' Sweet Star Child Cut-Out Pants ',
'Club Exx Sweet Star Child Cut-Out Pants cuz you\'re a show off. These pants have a super stretchy material, cut-out designs on the sides, and a slightly flared silhouette.',
65.25,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/4mZEc35ldmbNAFSuYsJoLojT5H4dL0eW-24.jpg?v=1676419701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/VfiQ8XIJLcrM6h4de8PrOEQpBzdbznKY-24.jpg?v=1676419701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/xIpQTjuPXbEAqKAFjWOIlXlGIlDj2eep-24.jpg?v=1676419701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/gvJglBcw2ScpJndgBrrTDhS46Cjn8J6F-24.jpg?v=1676419701',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/SNYoLSJJX7xWn5oqJX4zQSUAefXQqBQA-24.jpg?v=1676419701'
],
$manager);

$produit = $this->createProduct(' Space Diva Mini Skirt ',
'Club Exx Space Diva Mini Skirt cuz you\'re the planetary princess! This flared mini skirt has a ponte knit construction with mirrored metallic panels all over, a back zip closure, and a high waist fit.',
61.95,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/m0tagI67roIZeivIGltasfRh8hJlcgDY-24.jpg?v=1678748767',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/X3RTyoEgOd9Rbxt8qUe73ypI5PDyEPWC-24.jpg?v=1678748767',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/6FL9WXOs4Bd7pjayyRdVGe3zW5qvYHUg-24.jpg?v=1678748767',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/w225bHmT6OwT3vAVIulwdLsMI9JE0ITP-24.jpg?v=1678748767',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/MDDkJCorMuFydOoOIKrGGM5fbdqg2pqp-24.jpg?v=1678748767'
],
$manager);


$produit = $this->createProduct(' Fairy Type Holographic Skort - Lime ',
'Club Exx Fairy Type Holographic Skort - Lime will have you spreading the magic, babe! This holographic circle skort has a high waist fit and a cheeky shorts liner underneath.',
39.95,
8,
[
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/mF23HmlAj72ZMk3cPGzX1tU7cVTGKMT5-24.jpg?v=1678748642',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/GOzEKZ7yRNlAbFdIS4nmTGqZCCtoLMZn-24.jpg?v=1678748642',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/LoGXrYOx5WPNxQT8wS5USYDZjcNv4Jsj-24_c17914c5-cf82-4357-ad3c-ccf0618bc10a.jpg?v=1678748642',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/3ulB7dJAW70urAQp7ZBExRUpGt8iwGpL-24.jpg?v=1678748642',
'https://cdn.shopify.com/s/files/1/0634/6335/8721/products/DseVLyuxCbr4kcu9M1ah0U7wtnitvQsq-24.jpg?v=1678748642'
],
$manager);

$produit = $this->createProduct('Lunettes Cyberpunk',
'Lunettes Cyberpunk Futuristes,Unisexe, taille unique.Matériau en résine respectueux de l\'environnement, inoffensif pour le corps humain, sûr et fiable.Lunettes Cyberpunk avec un sens de la technologie futuriste.',
16.34,
20,
[
'https://i.etsystatic.com/37015906/r/il/96d34a/4277093169/il_1140xN.4277093169_2zs8.jpg',
'https://i.etsystatic.com/37015906/r/il/07d3e3/4229435284/il_1140xN.4229435284_o87f.jpg',
'https://i.etsystatic.com/37015906/r/il/a7f0ae/4229435086/il_1140xN.4229435086_ii6e.jpg',
'https://i.etsystatic.com/37015906/r/il/8c374f/4277093087/il_1140xN.4277093087_ird1.jpg',
'https://i.etsystatic.com/37015906/r/il/102b5f/4229435130/il_1140xN.4229435130_753y.jpg',
'https://i.etsystatic.com/37015906/r/il/12edfd/4277093161/il_1140xN.4277093161_m77a.jpg'
],
$manager);

$produit = $this->createProduct('See Beyond the Futur',
'Finitions fluides extraterrestres, boucles d\'oreilles gothiques cyberpunk, style y2k, unisexe haut de gamme. Matière : Acier 316L,Mixes,Taille : Finition : 195*70mm, Chaîne de réglage des deux côtés : 170mm,Couleur : argent, Style : accessoires pour le nez, accessoires pour les lèvres ',
0.00,
20,
[
'https://i.etsystatic.com/37015906/r/il/5d4c02/4352291547/il_1140xN.4352291547_mlxk.jpg',
'https://i.etsystatic.com/37015906/r/il/dd0e80/4352290517/il_1140xN.4352290517_aqkb.jpg',
'https://i.etsystatic.com/37015906/r/il/aaf07f/4352289631/il_1140xN.4352289631_miac.jpg',
'https://i.etsystatic.com/37015906/r/il/6e7c3c/4304899706/il_1140xN.4304899706_tbtg.jpg',
'https://i.etsystatic.com/37015906/r/il/5e70c3/4352290541/il_1140xN.4352290541_r8zc.jpg'
],
$manager);


$produit = $this->createProduct('',
'Ce produit est fait à la main, ce que vous voyez est ce que vous obtenez.Remarque : les accessoires pour le cou sont des fournitures de prise de vue et n\'incluent pas les accessoires pour le cou.La bande élastique du masque est réglable. Les groupes de lumière des deux côtés ont des batteries rechargeables intégrées (deux câbles de charge sont inclus avec le masque, assurez-vous d\'utiliser des têtes de charge 5v1a ou 2a), qui peuvent être tournées vers l\'avant et vers l\'arrière, détachables, appuyez longuement pour allumer la lumière , appuyez brièvement pour changer l\'effet de lumière, il y a toujours allumé, flux, flux clignotant, clignotant quatre modes. La lumière unique inférieure utilise une pile bouton commune, appuyez pour allumer la lumière directement et appuyez brièvement pour changer l\'effet lumineux. Les parties mécaniques du bras des deux côtés sont mobiles et détachables, et la forme peut être définie selon vos propres préférences.',
122.55,
22,
[
'https://i.etsystatic.com/37015906/r/il/26ded2/4265458150/il_1140xN.4265458150_ifri.jpg',
'https://i.etsystatic.com/37015906/r/il/e61af5/4312856881/il_1140xN.4312856881_jtdr.jpg',
'https://i.etsystatic.com/37015906/r/il/aa75eb/4265460602/il_1140xN.4265460602_nn0g.jpg',
'https://i.etsystatic.com/37015906/r/il/973fc3/4265460868/il_1140xN.4265460868_acyk.jpg',
'https://i.etsystatic.com/37015906/r/il/37cf97/4265461524/il_1140xN.4265461524_tigl.jpg',
'https://i.etsystatic.com/37015906/r/il/170333/4312855353/il_1140xN.4312855353_ivg8.jpg',
'https://i.etsystatic.com/37015906/r/il/d5ff9e/4265459144/il_1140xN.4265459144_g3br.jpg',
'https://i.etsystatic.com/37015906/r/il/501289/4312861627/il_1140xN.4312861627_dbs3.jpg'
],
$manager);

$produit = $this->createProduct('Masque Cyberpunk Bluetooth ',
'Avec l\'avènement de la nouvelle ère, le style cyberpunk balaie le monde et la future technologie viendra au monde. De plus en plus de cybermen se lèveront, et ils déclencheront la tendance du monde.
🔧Fonction LED :
1. Le système est livré avec 20 modèles statiques/22 modèles dynamiques
2. Modèles manuels de bricolage
3. Entrez votre texte personnalisé
4. Suivez la musique, le mode rythme',
158.73,
22,
[
'https://i.etsystatic.com/40414581/r/il/de1478/4694786337/il_1140xN.4694786337_jt5w.jpg',
'https://i.etsystatic.com/40414581/r/il/9192e6/4758141446/il_1140xN.4758141446_1p0k.jpg',
'https://i.etsystatic.com/40414581/r/il/d41c39/4646532606/il_1140xN.4646532606_78hq.jpg',
'https://i.etsystatic.com/40414581/r/il/660440/4694776901/il_1140xN.4694776901_nnyu.jpg',
'https://i.etsystatic.com/40414581/r/il/b48177/4833474581/il_1140xN.4833474581_eam9.jpg',
'https://i.etsystatic.com/40414581/r/il/67c1cd/4785208980/il_1140xN.4785208980_7q05.jpg'
],
$manager);

// $produit = $this->createProduct('',
// '',
// 0.00,
// 11,
// [
// '',
// '',
// '',
// '',
// '',
// ''
// ],
// $manager);


// $produit = $this->createProduct('',
// '',
// 0.00,
// 11,
// [
// '',
// '',
// '',
// '',
// '',
// ''
// ],
// $manager);


// $produit = $this->createProduct('',
// '',
// 0.00,
// 11,
// [
// '',
// '',
// '',
// '',
// '',
// ''
// ],
// $manager);


  $manager->flush();
     } 
     
     public function createProduct(string $shortLibel, string $LongLibel, float $prxHT, int $idCat,array $src,ObjectManager $manager){
     
        $produit = new Produit();
        $produit->setShortLibel($shortLibel);
        $produit->setLongLibel($LongLibel);
        $produit->setPrxHt($prxHT);
        $produit->setSlug($this->slugger->slug($produit->getShortLibel())->lower());
        $produit->setCategorie($manager->getRepository(Categorie::class)->findOneBy(array('id'=> $idCat)));
        $manager->persist($produit);

       
       for ($elem = 0; $elem<count($src);$elem++){     
        $photo = new Photo();
        $photo->setRefProduit($produit);
        $photo->setSrc($src[$elem]);
        if($elem==0){
           $photo->setIsprimary(true);
        }else{
          $photo->setIsprimary(false);
        }
       
        $manager->persist($photo);  }



    }

}
