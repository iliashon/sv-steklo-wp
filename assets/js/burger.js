const btnBurger = document.querySelector('#button-burger');
const btnLineBurger = document.querySelector('.button-burger-line');
const burgerMenu = document.querySelector('#nav-bar-burger');

const ACTIVE_BURGER_MENU_CLASS = 'nav-bar-burger_active';

const ACTIVE_BURGER_BTN_CLASS = 'button-burger-line_active';

function listenerBtnBurger() {
  burgerMenu.classList.toggle(ACTIVE_BURGER_MENU_CLASS);
  btnLineBurger.classList.toggle(ACTIVE_BURGER_BTN_CLASS);

  if (burgerMenu.classList.contains(ACTIVE_BURGER_MENU_CLASS)) {
    document.body.style.overflow = 'hidden'; 
  } else {
    document.body.style.overflow = ''; 
  }
}

btnBurger.addEventListener('click', listenerBtnBurger);