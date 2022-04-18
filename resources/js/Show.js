
const mainNav = document.getElementById('main-nav');
const togglemenu = document.getElementById('toggle-menu');
const mainMenu = document.getElementById('main-menu');

togglemenu.addEventListener('click',() => {
    mainNav.classList.toggle('nav--show')
    mainMenu.classList.toggle('main-menu--show')
} );

window.addEventListener('resize',()=>{
    if(mainNav.classList.contains('nav--show')){
    mainNav.classList.remove('nav--show')
    mainMenu.classList.remove('main-menu--show')
    }

});

