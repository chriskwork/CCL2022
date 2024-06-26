// ################## Navbar
//
//

const body = document.querySelector('body');
const header = document.querySelector('header');
const nav = document.querySelector('nav');
const colorModeSwitchBtn = document.querySelector('.mode-toggle-btn');
const hamBtn = nav.querySelector('.hamburger');
const navMenu = nav.querySelector('.nav-menu');

// Mobile version hamburger menu open and close
hamBtn.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    hamBtn.classList.toggle('clicked');
    body.classList.toggle('scroll-lock');
});

// ################## Landing page BLOG mobile size
// scroll X with mouse wheel.

// const recentPostsContainer = document.querySelector('.blog-wrapper');
// let currentWidth = window.innerWidth;

// const scrollingY = (evt) => {
//     evt.preventDefault();
//     recentPostsContainer.scrollLeft += evt.deltaY;
// };

// if (recentPostsContainer) {
//     if (currentWidth >= 768) {
//         recentPostsContainer.removeEventListener('wheel', scrollingY);
//     } else {
//         recentPostsContainer.addEventListener('wheel', scrollingY);
//     }
// }

// ################## Switch theme mode(light/dark)
//
//

const switchModeBtn = document.querySelector('.mode-toggle-btn');
// mobile nav menu bars (white color when the theme is dark mode)
const mobileMenuBarsImg = nav.querySelector('.navBtn');

// read local storage saved theme data
const savedMode = localStorage.getItem('dark');

const switchColorMode = (currentMode) => {
    if (currentMode) {
        // dark mode = 1

        body.classList.add('dark');
        switchModeBtn.setAttribute(
            'src',
            'https://cafeconlecheesp.com/wp-content/themes/CCL2022/assets/images/layout/sun.svg'
        );
        mobileMenuBarsImg.setAttribute(
            'src',
            'https://cafeconlecheesp.com/wp-content/themes/CCL2022/assets/images/layout/menu-bars-white.svg'
        );
        localStorage.setItem('dark', 1);
    } else {
        // dark mode = 0

        body.classList.remove('dark');
        switchModeBtn.setAttribute(
            'src',
            'https://cafeconlecheesp.com/wp-content/themes/CCL2022/assets/images/layout/moon.svg'
        );
        mobileMenuBarsImg.setAttribute(
            'src',
            'https://cafeconlecheesp.com/wp-content/themes/CCL2022/assets/images/layout/menu-bars.svg'
        );
        localStorage.setItem('dark', 0);
    }
};

switchModeBtn.addEventListener('click', () => {
    switchColorMode(!body.classList.contains('dark'));
});

switchColorMode(+savedMode);
// + 표시는 string을 number로 변환해준다.

//
// ############ Go To Top Button
//
// Get the button
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

// When the user scrolls down 300px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 300 ||
        document.documentElement.scrollTop > 300
    ) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
}

// When the user clicks on the button, scroll to the top of the document
function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
