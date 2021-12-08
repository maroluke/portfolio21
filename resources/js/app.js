import './bootstrap';

/* 
 * Initialize Alpine JS
 * https://github.com/alpinejs/alpine/
 */

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

/* 
 * Initialize Plausible.io
 * https://github.com/plausible/
 */

import Plausible from 'plausible-tracker';
const { enableAutoPageviews } = Plausible({
  domain: 'markolukac.ch'
});

// This tracks the current page view and all future ones as well
enableAutoPageviews();

/* 
 * Initialize Swiper JS
 * https://github.com/nolimits4web/swiper
 */

// core version:
import Swiper from 'swiper';

// import Swiper styles
import 'swiper/scss';

var w = window.innerWidth;
if (w < 640) {
    const swiper = new Swiper('.swiper', {
        speed: 300,
        slidesPerView: 'auto',
        loop: true,
        cssMode: true,
    });
}

/* 
 * Initialize Simple Parallax
 * https://github.com/geosigno/simpleParallax.js/
 */

import simpleParallax from 'simple-parallax-js';

// delete if nothing breaks
// import { functions } from 'lodash';

var image = document.querySelectorAll('.parallax');
new simpleParallax(image, {
    overflow: true,
    delay: .6,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
    scale: 1.3,
    orientation: "down",
});

// background blured squares
var bgImage = document.querySelectorAll('.blured-bg');
var randomScale = getRandomFloat(0.2, 0.6, 1);
new simpleParallax(bgImage, {
    overflow: true,
    // delay: randomDelay,
    delay: 2,
    scale: randomScale,
    orientation: "up left",
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
marginFromTop('intro-gradient', window.innerHeight);

// AJAX CV Request submit
$('form').on('submit', function (e) {
    $('.icon-send').fadeOut(0);

    e.preventDefault(); // prevent the form submit

    var url = $(this).data('context');
    // create the FormData object from the form context (this),
    // that will be present, since it is a form event
    var formData = new FormData(this);
    // build the ajax call
    $.ajax({
        url: url,
        method: 'POST',
        data: formData,
        beforeSend: function () {
            $('.icon-submitted').fadeOut();
            $('.icon-error').fadeOut();
            $('.messages').fadeOut();
            $(':submit').removeClass('error success');
            $('.messages').removeClass('text-neon-green text-neon-red');
            $('.icon-loading').fadeIn();
        },
        complete: function () {
            $('.icon-loading').fadeOut();
            $('.email-input').html('');
        },
        success: function (response) {
            // handle success response
            $('.icon-submitted').fadeIn();

            $('.messages').addClass('text-neon-green').html('Herzlichen Dank!').fadeIn();
            $(':submit').addClass('success');
        },
        error: function (error) {
            // handle error response
            $('.icon-error').fadeIn(0);
            
            // get errors
            var errors = JSON.parse(error.responseText);
            // store them
            var errorMessage = errors.errors.email;
            // display error messages if message element is empty
            $('.messages').addClass('text-neon-red').html(errorMessage).fadeIn();
            $(':submit').addClass('error');
        },
        contentType: false,
        processData: false
    });
});

// reset CV request state
$('.email-input').focus(function() {
    $('.icon-submitted').fadeOut();
    $('.icon-error').fadeOut();
    $(':submit').removeClass('error success');
    $('.messages').removeClass('text-neon-green text-neon-red');
    $('.icon-send').fadeIn();
});

$('#call-btn').on('click', function (e) {
    
});

// get random float between 0.8 - 2.0
function getRandomFloat(min, max, decimals) {
    const str = (Math.random() * (max - min) + min).toFixed(decimals);
    return parseFloat(str);
}