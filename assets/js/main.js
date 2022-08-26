// ################## Navbar
//
//

const body = document.querySelector('body');
const header = document.querySelector('header');
const nav = document.querySelector('nav');
const colorModeSwitchBtn = document.querySelector('.mode-toggle-btn');
const hamBtn = nav.querySelector('.hamburger');
const navMenu = nav.querySelector('.links');

function stickyNavbar() {
  header.classList.toggle('scrolled', window.pageYOffset > 0);
}

stickyNavbar();

window.addEventListener('scroll', stickyNavbar);

nav.addEventListener('click', () => {
  header.classList.toggle('scrolled');
});

// Mobile version hamburger menu

hamBtn.addEventListener('click', () => {
  navMenu.classList.toggle('mobile-show');
  body.classList.toggle('scroll-lock');
});

// ################## Pages header dynamic className
//
//

const pageHeader = document.querySelector('.page-header');

if (pageHeader) {
  const classNames = ['zaragoza', 'segovia', 'toledo', 'salchicon'];

  const ranNum = Math.floor(Math.random() * classNames.length);

  pageHeader.classList.add(`${classNames[ranNum]}`);
  console.log(classNames[ranNum]);
}
