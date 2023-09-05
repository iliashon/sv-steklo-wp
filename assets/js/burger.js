const btnBurger = document.querySelector('#button-burger');
const btnLineBurger = document.querySelector('.button-burger-line');
const burgerMenu = document.querySelector('#nav-bar-burger');

const ACTIVE_BURGER_MENU_CLASS = 'nav-bar-burger_active';

const ACTIVE_BURGER_BTN_CLASS = 'button-burger-line_active';

function listenerBtnBurger() {
  burgerMenu.classList.toggle(ACTIVE_BURGER_MENU_CLASS);
  btnLineBurger.classList.toggle(ACTIVE_BURGER_BTN_CLASS);
}

btnBurger.addEventListener('click', listenerBtnBurger);