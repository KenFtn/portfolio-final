"use strict";

var btn = document.querySelector('.anm-menu-button'),
    menu = document.querySelector('.anm-menu'),
    background = document.querySelector('.anm-background'),
    btnMenu = document.querySelector('.anm-container').querySelectorAll('a');
console.log(btnmenu);
var menuOpen = false;

function showMenu() {
  menuOpen = true;
  btn.classList.add('anm-fade-in');
  menu.classList.add('anm-show');
  background.classList.add('anm-show');
  setTimeout(function () {
    menu.classList.add('anm-fade-in');
    background.classList.add('anm-fade-in');
  }, 1);
}

function hideMenu() {
  menuOpen = false;
  btn.classList.remove('anm-fade-in');
  menu.classList.remove('anm-fade-in');
  background.classList.remove('anm-fade-in');
  setTimeout(function () {
    menu.classList.remove('anm-show');
    background.classList.remove('anm-show');
  }, 500);
}

btn.addEventListener('click', function () {
  menuOpen ? hideMenu() : showMenu();
});

btnMenu.forEach(btn => {
  btn.addEventListener('click', function(){
    menuOpen ? hideMenu() : showMenu();
  });
});

window.addEventListener('keydown', function (e) {
  if (e.keyCode == 27) hideMenu();
});


