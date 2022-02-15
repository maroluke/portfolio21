import './bootstrap';
import Alpine from 'alpinejs';
import Plausible from 'plausible-tracker';
import Swiper from 'swiper';
import 'swiper/scss';
import simpleParallax from 'simple-parallax-js';
import Sparticles from "sparticles";

/* 
 * Initialize Alpine JS
 * https://github.com/alpinejs/alpine/
 */

window.Alpine = Alpine;
Alpine.start();

/* 
 * Initialize Plausible.io
 * https://github.com/plausible/
 */

const { enableAutoPageviews } = Plausible({
  domain: 'markolukac.ch'
});

// This tracks the current page view and all future ones as well
enableAutoPageviews();

/* 
 * Initialize Swiper JS
 * https://github.com/nolimits4web/swiper
 */

var w = window.innerWidth;
if (w < 640) {
    const swiper = new Swiper('.swiper', {
        speed: 400,
        cssMode: true,
        roundLengths: true,
        slidesPerView: 'auto',
        loop: true,
    });
}

/* 
 * Initialize Simple Parallax
 * https://github.com/geosigno/simpleParallax.js/
 */

// delete if nothing breaks
// import { functions } from 'lodash';

var image1 = document.getElementsByClassName('parallax');
new simpleParallax(image1, {
    overflow: true,
    delay: .3,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
    scale: 1.1,
    orientation: "up",
});

var image2 = document.getElementsByClassName('parallax-2');
new simpleParallax(image2, {
    overflow: true,
    delay: .3,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
    scale: 1.2,
    orientation: "down",
});

var image3 = document.getElementsByClassName('parallax-3');
new simpleParallax(image3, {
    overflow: true,
    delay: .3,
	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
    scale: 1.4,
    orientation: "up",
});

//
// I'm hotlinking to some SVG images from flaticon.com
// for use as the snowflakes. I hope that remains possible
// especially with the below attribution;
//
// ❄ Icons made by Freepik from www.flaticon.com
// ❄ https://www.flaticon.com/packs/snowflakes
//
  
  let colors = {
    color4: "rgba(255,255,255,1)",
    color3: "rgba(56,235,228,1)",
    color2: "rgba(235,80,204,1)",
    color1: "rgba(87,0,199,1)"
  };
  
  let options = {
    alphaSpeed: 1,
    alphaVariance: 10,
    color: [colors.color1, colors.color2, colors.color3, colors.color4],
    composition: "source-over",
    count: 21,
    direction: 45,
    drift: 0,
    glow: 50,
    maxAlpha: .4,
    maxSize: 34,
    minAlpha: .1,
    minSize: 5,
    parallax: 1.3,
    rotation: .3,
    shape: "random",
    speed: .5,
    style: "fill",
    twinkle: false,
    xVariance: 0,
    yVariance: 0,
    bounce: false,
  };
  
  window.onload = function() {
    initSparticles();
  }
  
  window.initSparticles = function() {
    let $main = document.getElementById('flying-shapes');
    $main.style.opacity = 1;
    let width = window.innerWidth;
    let height = window.innerHeight;
    window.mySparticles = new Sparticles($main, options, width, height);
  };
  

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
// marginFromTop('flying-shapes', window.innerHeight);

// AJAX CV Request submit
$('form').on('submit', function (e) {
    $('.icon-send', this).fadeOut(0);

    e.preventDefault(); // prevent the form submit

    var url = $(this).data('context');
    // create the FormData object from the form context (this),
    // that will be present, since it is a form event
    var formData = new FormData(this);

    let iconSubmitted = $('.icon-submitted', this);
    let iconError = $('.icon-error', this);
    let message = $('.messages', this);
    let btnSubmit = $('.btn-submit', this);
    let iconLoading = $('.icon-loading', this)
    let emailInput = $('.email-input', this);
    // build the ajax call
    $.ajax({
        url: url,
        method: 'POST',
        data: formData,
        beforeSend: function () {
            $(iconSubmitted).fadeOut();
            $(iconError).fadeOut();
            $(btnSubmit).removeClass('error success').addClass('bg-opacity-75 hover:bg-opacity-75');
            $(iconLoading).fadeIn();
        },
        complete: function () {
            $(iconLoading).fadeOut();
            $(emailInput).html('');
        },
        success: function (response) {
            // handle success response
            $(iconSubmitted).fadeIn();

            $(message).html('Vielen Dank! <span class="text-neon-red-light">&#10084;</span>').fadeIn();
            $(btnSubmit).addClass('success').prop('disabled', true);

            console.log(emailInput);
        },
        error: function (error) {
            // handle error response
            $(iconError).fadeIn(0);
            
            // get errors
            var errors = JSON.parse(error.responseText);
            // store them
            var errorMessage = errors.email;
            // display error messages if message element is empty
            $(message).addClass('text-neon-red').html(errorMessage).fadeIn();
            $(btnSubmit).addClass('error');
        },
        contentType: false,
        processData: false
    });
});

// reset CV request state
$('.email-input').on('focus', function() {
    $('.icon-submitted').fadeOut();
    $('.icon-error').fadeOut();
    $('.btn-submit').removeClass('error success bg-opacity-75 hover:bg-opacity-75');
    $('.messages').html('Die E–Mail Adresse wird nicht erfasst.');
    $('.icon-send').fadeIn();
    $('.btn-submit').prop('disabled', false);
});