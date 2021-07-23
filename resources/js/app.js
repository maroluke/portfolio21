import './bootstrap';


// Import Alpine JS
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/swiper-bundle.css';

// core version + navigation, pagination modules:
import SwiperCore, { Navigation, Pagination } from 'swiper/core';

// configure Swiper to use modules
SwiperCore.use([Navigation, Pagination]);

const swiper = new Swiper('.swiper-container', {
    speed: 500,
    slidesPerView: 'auto',
    pagination: {
        el: '.pagination',
        type: 'bullets',
    },
});