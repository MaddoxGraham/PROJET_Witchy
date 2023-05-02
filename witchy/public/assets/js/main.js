/*** Declancher button from menu to submenu */
catBtn = document.querySelectorAll('.majorClass');


for (let index = 0; index < catBtn.length; index++) {
    //const element = array[index];
    thiscatBtn = catBtn[index];
    catUnder = document.querySelectorAll('.undernav');
    

    thiscatBtn.addEventListener("click", function () {

        subcat = document.getElementsByClassName('undernav')[index];
        catUnder.forEach(element => {
           if(element == subcat){}else{
            element.classList.add('underHidden');
           }
        });

        if (subcat.classList.contains('underHidden')) {
            subcat.classList.remove('underHidden');
         } 
        else {
            subcat.classList.add('underHidden');

        }
    })


}

document.querySelectorAll('.card').forEach(card => {
  const images = card.getAttribute('data-images').split(',');
  console.log(images);
  let currentImage = 0;

  const primaryImage = card.querySelector('.card-img-top');
  const parentDiv = primaryImage.parentElement;

  // Ajout de la balise img pour la deuxième image
  const secondaryImage = document.createElement('img');
  secondaryImage.classList.add('d-block', 'h-100', 'd-inline-block', 'card-img-top', 'img-fluid', 'w-100');
  parentDiv.insertBefore(secondaryImage, primaryImage.nextSibling);

  // Affichage de la première image
  primaryImage.src = images[0];

  // Fonction pour changer l'image au survol
  parentDiv.addEventListener('mouseenter', () => {
    currentImage = (currentImage + 1) % images.length;
    if (currentImage === 0) {
      primaryImage.style.display = 'block';
      secondaryImage.style.display = 'none';
    } else {
      primaryImage.style.display = 'none';
      secondaryImage.style.display = 'block';
      secondaryImage.src = images[currentImage];
    }
  });

  // Fonction pour revenir à la première image en sortant du survol
  parentDiv.addEventListener('mouseleave', () => {
    currentImage = 0;
    primaryImage.style.display = 'block';
    secondaryImage.style.display = 'none';
  });
});


