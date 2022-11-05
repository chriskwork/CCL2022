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
let currentWidth = window.innerWidth;

const scrollingY = (evt) => {
  evt.preventDefault();
  recentPostsContainer.scrollLeft += evt.deltaY;
};

if (recentPostsContainer) {
  if (currentWidth >= 768) {
    recentPostsContainer.removeEventListener('wheel', scrollingY);
  } else {
    recentPostsContainer.addEventListener('wheel', scrollingY);
  }
}

// ################## Switch theme mode(light/dark)
//
//

const switchModeBtn = document.querySelector('.mode-toggle-btn');

const savedMode = localStorage.getItem('dark');

const switchColorMode = (currentMode) => {
  if (currentMode) {
    // dark mode = 1

    body.classList.add('dark');
    switchModeBtn.setAttribute(
      'src',
      //TODO: 나중에 링크 주소값 변경할 것.
      'http://ccl2023.local/wp-content/themes/CCL2022/assets/images/layout/sun.svg'
    );
    localStorage.setItem('dark', 1);
  } else {
    // dark mode = 0

    body.classList.remove('dark');
    switchModeBtn.setAttribute(
      'src',
      'http://ccl2023.local/wp-content/themes/CCL2022/assets/images/layout/moon.svg'
    );
    localStorage.setItem('dark', 0);
  }
};

switchModeBtn.addEventListener('click', () => {
  switchColorMode(!body.classList.contains('dark'));
});

switchColorMode(+savedMode);
// + 표시는 string을 number로 변환해준다.
