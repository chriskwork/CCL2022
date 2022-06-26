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
