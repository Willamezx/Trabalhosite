
const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})


let count= 1;
document. getElementById("radio1").checked = true;

setInterval( function (){
  nextImage();
}, 4000)

function nextImage(){
  count++
  if (count>4){
    count = 1;
  } 

  document.getElementById("radio"+count).checked = true;
}



