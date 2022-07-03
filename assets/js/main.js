// ################## Navbar
//
//

const header = document.querySelector('header');
const nav = document.querySelector('nav');
const testBtn = document.querySelector('.mode-toggle-btn');

function stickyNavbar() {
  header.classList.toggle('scrolled', window.pageYOffset > 0);
}

stickyNavbar();

window.addEventListener('scroll', stickyNavbar);

nav.addEventListener('click', () => {
  console.log('btn clicked');
  header.classList.toggle('scrolled');
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
