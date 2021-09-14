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

// core version:
import Swiper from 'swiper';

// import Swiper styles
import 'swiper/scss';

const swiper = new Swiper('.swiper', {
    speed: 300,
    slidesPerView: 'auto',
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
    delay: 2,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
    scale: 1.3,
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