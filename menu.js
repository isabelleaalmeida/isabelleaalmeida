let btnMenu = document.getElementById('btn-abrir');
let menu = document.getElementById('menu-mobile');
let overlay = document.getElementById('overlay-menu')
btnMenu.addEventListener('click', ()=>{
  menu.classList.add('abrir-mobile')
})

menu.addEventListener('click', ()=>{
  menu.classList.remove('abrir-mobile')
})
overlay.addEventListener('click', ()=>{
  menu.classList.remove('abrir-mobile')
})


