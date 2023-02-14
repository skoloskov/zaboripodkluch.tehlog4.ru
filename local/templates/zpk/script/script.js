"use strict";

let burger_toggle = document.querySelector('.burger_toggle');
let menu_burger = document.querySelector('.menu_burger');
let j_close_menu_mobile = document.querySelector('.j-close-menu-mobile');
let menu_burger_drop = document.querySelector('.menu_burger__drop');
let menu_burger_main_list = document.querySelector('.menu_burger__main_list');
let menu_burger_backdrop = document.querySelector('.menu_burger__backdrop');

burger_toggle.addEventListener('click', function () {
    menu_burger.classList.add('menu_burger__active');
});

j_close_menu_mobile.addEventListener('click', function () {
    menu_burger.classList.remove('menu_burger__active');
});

menu_burger_backdrop.addEventListener('click', function () {
    menu_burger.classList.remove('menu_burger__active');
});

menu_burger_main_list.addEventListener('mouseover', function () {
    menu_burger_drop.classList.add('menu_burger__drop__active');
});




