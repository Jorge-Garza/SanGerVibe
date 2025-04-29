// import Swiper JS
import Swiper from 'swiper'
import { Navigation, Autoplay } from 'swiper/modules'

import 'swiper/css';  
import 'swiper/css/navigation';
import 'swiper/css/autoplay'; // aunque no siempre necesario explícitamente

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.slider')) {
        const opciones = {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }
        }

        Swiper.use([Navigation, Autoplay]);
        new Swiper('.slider', opciones)
    }

    // NUEVO: inicializar Swipers en cada paquete
    const swipersPaquetes = document.querySelectorAll('.paquete__swiper');
    swipersPaquetes.forEach((swiperContainer) => {
        new Swiper(swiperContainer, {
            modules: [Autoplay],
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 1000,
        });
    });
});
