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

// AJAX CV Request
$('form').on('submit', function (e) {
    e.preventDefault(); // prevent the form submit
    var url = 'submitEmail';
    // create the FormData object from the form context (this),
    // that will be present, since it is a form event
    var formData = new FormData(this);
    // build the ajax call
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        success: function (response) {
            // handle success response
            $('p').addClass('xxx');
            console.log('response.data');
        },
        error: function (response) {
            // handle error response
            console.log(response.data);
        },
        contentType: false,
        processData: false
    });
})