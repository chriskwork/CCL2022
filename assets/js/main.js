// ################## Navbar
//
//

const body = document.querySelector('body');
const header = document.querySelector('header');
const nav = document.querySelector('nav');
const colorModeSwitchBtn = document.querySelector('.mode-toggle-btn');
const hamBtn = nav.querySelector('.hamburger');
const navMenu = nav.querySelector('.nav-menu');

// sticky navbar
function stickyNavbar() {
  header.classList.toggle('scrolled', window.pageYOffset > 80);
}

stickyNavbar();

window.addEventListener('scroll', stickyNavbar);

nav.addEventListener('click', () => {
  header.classList.toggle('scrolled');
});

// Mobile version hamburger menu
hamBtn.addEventListener('click', () => {
  navMenu.classList.toggle('open');
  hamBtn.classList.toggle('clicked');
  body.classList.toggle('scroll-lock');
});

// ################## Landing page BLOG mobile size
// scroll X with mouse wheel.

const recentPostsContainer = document.querySelector('.blog-wrapper');

recentPostsContainer.addEventListener('wheel', (evt) => {
  evt.preventDefault();
  recentPostsContainer.scrollLeft += evt.deltaY;
});

// ################## Pages header dynamic className
//
//

// const pageHeader = document.querySelector('.page-header');

// if (pageHeader) {
//   const classNames = [
//     'zaragoza',
//     'segovia',
//     'toledo',
//     'jamon',
//     'barcelona',
//     'flamenco',
//   ];

//   const ranNum = Math.floor(Math.random() * classNames.length);

//   pageHeader.classList.add(`${classNames[ranNum]}`);
//   console.log(classNames[ranNum]);
// }
