// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';  

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.slider')) {
        const opciones = {

        }

        new Swiper('.slider', opciones)
    }
});