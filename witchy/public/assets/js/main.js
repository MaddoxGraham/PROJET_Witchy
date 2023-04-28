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
      if(path.substring(0,4) === "http"){
        img.src = path;
      } else {
        img.src = "{{ asset('assets/uploads/products/mini/300x300-' ~" + path + ") }}";
        console.log(path);
        console.log(img.src);
      }
      
    });

    // Basculer entre les images
    card.addEventListener('mouseover', () => {
      if (paths.length > 1) {
        const index = Math.floor(Math.random() * paths.length);
        if(paths[index].substring(0,4)=== "http"){
          img.src = paths[index];
        } else {
          img.src = "{{ asset('assets/uploads/products/mini/300x300-' ~" + paths[index] + ") }}";
          console.log(paths[index]);
          console.log(img.src);

        }
      }
    });
   
    // Revenir à l'image principale
    card.addEventListener('mouseout', () => {
      img.src = paths[0];
    });
  }
});

