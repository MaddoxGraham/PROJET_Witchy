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

// const cards = document.querySelectorAll('.bestSeller .card');

// cards.forEach((card) => {
//   const images = card.dataset.images.split(',');
//   let src;
//   if (images[0].startsWith('http')) {
//     src = images[0];
//   } else {
//     const blob = new Blob([images[0]], { type: 'image/webp' });
//     src = URL.createObjectURL(blob);
//   }
//   const img = document.createElement('img');
//   img.src = src;
//   img.alt = card.querySelector('.font-serif').textContent;
//   img.classList.add('d-block', 'h-100', 'd-inline-block', 'card-img-top', 'img-fluid', 'w-100');
//   const link = card.querySelector('a');
//   link.setAttribute('id', 'ancre');
//   link.appendChild(img);

//   img.addEventListener('mouseover', () => {
//     if (images[1].startsWith('http')) {
//       img.src = images[1];
//     } else {
//       const blob = new Blob([images[1]], { type: 'image/webp' });
//       img.src = URL.createObjectURL(blob);
//     }
//   });

//   img.addEventListener('mouseout', () => {
//     img.src = src;
//   });
// });