import './bootstrap';

/* 
 * Import Alpine JS
 * https://github.com/alpinejs/alpine/
 */

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

/* 
 * Import Swiper JS
 * https://github.com/nolimits4web/swiper
 */

// core version + navigation, pagination modules:
import Swiper, { Navigation, Pagination } from 'swiper';
// import Swiper and modules styles
import 'swiper/scss';
import 'swiper/scss/navigation';
import 'swiper/scss/pagination';

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

const swiper = new Swiper('.swiper', {
    speed: 300,
    slidesPerView: 'auto',
    pagination: {
        el: '.pagination',
        type: 'bullets',
    },
    loop: true,
});

/* 
 * Import Simple Parallax
 * https://github.com/geosigno/simpleParallax.js/
 */

import simpleParallax from 'simple-parallax-js';

var image = document.querySelectorAll('.parallax');
new simpleParallax(image, {
    overflow: true,
    delay: 2.5,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)'
});

/* 
 * Fix Height Issue with Mobile Browser Navigation Element
 */

function setScreenHeight(el) {
    let screenHeight = window.innerHeight;
    const element = document.getElementById(el);
    element.style.height = screenHeight + 'px';
}

function marginFromTop(el, margin) {
    const element = document.getElementById(el);
    element.style.marginTop = margin + 'px';
}

setScreenHeight('entry');
marginFromTop('intro', window.innerHeight);