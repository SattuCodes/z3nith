const burger = document.querySelector('.burger');
const navContainer = document.querySelector('.nav-container');
const navbar = document.querySelector('.navbar');
const logoImg = document.querySelector('.logo img');
const navlist = document.querySelector('.nav-list')
const newLogoSrc = 'asset/img/Z3NITH24WHITE.png';
const originalLogoSrc = 'asset/img/Z3NITH24BLACK.png';

burger.addEventListener('click', () => {
    navContainer.classList.toggle('v-class');
    navbar.classList.toggle('h-nav');
    navlist.classList.toggle('v-class');
    if (navContainer.classList.contains('v-class')) {
        logoImg.src = originalLogoSrc;
        body.style.backgroundColor = '#1e1e1e';
    } else {
        logoImg.src = newLogoSrc;
        body.style.backgroundColor = '#ffffff';  // change to your desired color when the menu is not open
    }
});
