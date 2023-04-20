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
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  const imagePaths = card.dataset.images;
  if (imagePaths) {
    const paths = imagePaths.split(',');
    const img = card.querySelector('img');

    // Précharger les images secondaires
    paths.forEach(path => {
      const img = new Image();
      img.src = path;
    });

    // Basculer entre les images
    card.addEventListener('mouseover', () => {
      if (paths.length > 1) {
        const index = Math.floor(Math.random() * paths.length);
        img.src = paths[index];
      }
    });

    // Revenir à l'image principale
    card.addEventListener('mouseout', () => {
      img.src = paths[0];
    });
  }
});