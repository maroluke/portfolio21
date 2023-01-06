import './bootstrap';
import Alpine from 'alpinejs';
import Plausible from 'plausible-tracker';
import { Swiper, SwiperSlide } from 'swiper';
// Import Swiper styles
import "swiper/css";
import "swiper/css/pagination";

//import simpleParallax from 'simple-parallax-js';
import Sparticles from "sparticles";

// let gyroscope = new Gyroscope({frequency: 60});

// gyroscope.addEventListener('reading', (e) => {
//   console.log(`Angular velocity along the X-axis ${gyroscope.x}`);
//   console.log(`Angular velocity along the Y-axis ${gyroscope.y}`);
//   console.log(`Angular velocity along the Z-axis ${gyroscope.z}`);
// });
// gyroscope.start();

// Lazy Loading
document.addEventListener("DOMContentLoaded", function () {
    var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy"));

    if ("IntersectionObserver" in window) {
        let lazyBackgroundObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    lazyBackgroundObserver.unobserve(entry.target);
                }
            });
        });

        lazyBackgrounds.forEach(function (lazyBackground) {
            lazyBackgroundObserver.observe(lazyBackground);
        });
    }
});

/* 
 * Initialize Alpine JS
 * https://github.com/alpinejs/alpine/
 */

window.Alpine = Alpine;
Alpine.start();

//
// I'm hotlinking to some SVG images from flaticon.com
// for use as the snowflakes. I hope that remains possible
// especially with the below attribution;
//
// ❄ Icons made by Freepik from www.flaticon.com
// ❄ https://www.flaticon.com/packs/snowflakes
//
  
const colors = {
    color4: "rgba(255,255,255,1)",
    color3: "rgba(56,235,228,1)",
    color2: "rgba(235,80,204,1)",
    color1: "rgba(87,0,199,1)"
};
  
const options = {
    alphaSpeed: 0.3,
    alphaVariance: 50,
    color: [colors.color1, colors.color2, colors.color3, colors.color4],
    composition: "source-over",
    count: 10,
    direction: 20,
    drift: 0,
    glow: 0,
    maxAlpha: .4,
    maxSize: 15,
    minAlpha: .1,
    minSize: 3,
    parallax: 5,
    rotation: 2,
    shape: "random",
    speed: 1,
    style: "fill",
    twinkle: false,
    xVariance: 2,
    yVariance: 2,
    bounce: false,
};

window.onload = function() {
    initSparticles();
};

window.initSparticles = function() {
    let $main = document.getElementById('flying-shapes');
    $main.style.opacity = 1;
    let width = window.innerWidth;
    let height = window.innerHeight;
    // alternatives to window.innerHeight

    
    window.mySparticles = new Sparticles($main, options, width, height);
};

/* 
 * Initialize Simple Parallax
 * https://github.com/geosigno/simpleParallax.js/
 */

// delete if nothing breaks
// import { functions } from 'lodash';

// const image1 = document.getElementsByClassName('parallax');
// new simpleParallax(image1, {
//     overflow: true,
//     delay: .3,
// 	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
//     scale: 1.1,
//     orientation: "up",
// });

// const image2 = document.getElementsByClassName('parallax-2');
// new simpleParallax(image2, {
//     overflow: true,
//     delay: .3,
// 	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
//     scale: 1.2,
//     orientation: "down",
// });

// const image3 = document.getElementsByClassName('parallax-3');
// new simpleParallax(image3, {
//     overflow: true,
//     delay: .3,
// 	transition: 'cubic-bezier(0.33, 1, 0.68, 1)',
//     scale: 1.4,
//     orientation: "up",
// });
  

/* 
 * Fix Height Issue with Mobile Browser Navigation Element
 */

// function setScreenHeight(el) {
//     let screenHeight = window.innerHeight;
//     const element = document.getElementById(el);
//     element.style.height = screenHeight + 'px';
// }

// function marginFromTop(el, margin) {
//     const element = document.getElementById(el);
//     element.style.marginTop = margin + 'px';
// }

// setScreenHeight('entry');
// marginFromTop('flying-shapes', window.innerHeight);

const windowheight = window.outerHeight;
$('#intro').css('margin-top', windowheight);

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
  
    const w = window.innerWidth;
    if (w < 640) {
        const options = {
            speed: 400,
            cssMode: true,
            roundLengths: true,
            loop: false,
            removeClippedSubviews: false,
            slidesPerView: "auto",
            spaceBetween: 10,
            centeredSlides: true,
        }

        const swiper1 = new Swiper('.swiper1', options);

        const swiper2 = new Swiper('.swiper2', options);

        const swiper3 = new Swiper('.swiper3', options);

        const swiper4 = new Swiper('.swiper4', options);

        const swiper5 = new Swiper('.swiper5', options);

        // swiper.on('slideChange', function () {
        //     $('.animate-swipe-x').addClass('fade-out');
        // });

        // swiper.on('toEdge', function () {
        //     $('.animate-swipe-x').removeClass('fade-out');
        // });
    }

// AJAX CV Request submit
$('form').on('submit', function (e) {
    $('.icon-send', this).fadeOut(0);

    e.preventDefault(); // prevent the form submit

    const url = $(this).data('context');
    // create the FormData object from the form context (this),
    // that will be present, since it is a form event
    let formData = new FormData(this);

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