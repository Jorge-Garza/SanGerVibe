<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo ?></h2>
    <p class="registro__descripcion">Elige tu plan</p>

    <div class="sangervibe">
        <div class="sangervibe__grid">
            <div class="sangervibe__imagen">
                <picture>
                    <source srcset="build/img/paquetes.avif" type="image/avif">
                    <source srcset="build/img/paquetes.webp" type="image/webp">
                    <img loading="lazy" style="max-width: 450px; max-height: 450px; display: block; margin: 0 auto;" src="build/img/paquetes.png" alt="Imagen SanGerVibe">
                </picture>
            </div>
    
            <div class="sangervibe__contenido">
                <h3>Reserva especial</h3>
                <p class="sangervibe__texto">
                    Nuestros kits de yoga están diseñados para ofrecerte una experiencia completa según tu nivel de práctica. Cada kit incluye herramientas esenciales para mejorar tu postura, flexibilidad y comodidad. Explora las opciones y elige el que mejor se adapte a tus necesidades
                </p>
            </div>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="paquetes__grid">
        <div class="paquete">
            <div class="swiper paquete__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitbasico/basico1.avif" type="image/avif">
                            <source srcset="build/img/kitbasico/basico1.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitbasico/basico1.png" alt="Imagen Kit Básico Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitbasico/basico2.avif" type="image/avif">
                            <source srcset="build/img/kitbasico/basico2.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitbasico/basico2.png" alt="Imagen Kit Básico Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                    <picture>
                        <source srcset="build/img/kitbasico/basico3.avif" type="image/avif">
                        <source srcset="build/img/kitbasico/basico3.webp" type="image/webp">
                        <img loading="lazy" width="200" src="build/img/kitbasico/basico3.png" alt="Imagen Kit Básico Alternativa">
                    </picture>
                    </div>
                </div>
            </div>
            <div class="paquete__contenedor-info">
                <h3 class="paquete__nombre">Kit Básico</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Tapete de Relajación: </span>Tapete ligero y plegable para uso en áreas de descanso y actividades de estiramiento.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Guía de técnicas de relajación básicas: </span>Instrucciones para ejercicios de respiración y estiramiento suave.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Termo de 500ml: </span>Pequeña botella plegable para hidratación durante la visita.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Toalla: </span>Para el momento de realizar los ejercicios.
                    </li>
                </ul>
    
                <p class="paquete__precio">$15.42</p>
                
                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container-kitbasico"></div>
                    </div>
                </div>
            
                <div class="descarga">
                    <a href="ruta-del-archivo" download="nombre-del-archivo" class="boton-descarga">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                            <path d="M10 2l-.15 .005a2 2 0 0 0 -1.85 1.995v6.999l-2.586 .001a2 2 0 0 0 -1.414 3.414l6.586 6.586a2 2 0 0 0 2.828 0l6.586 -6.586a2 2 0 0 0 .434 -2.18l-.068 -.145a2 2 0 0 0 -1.78 -1.089l-2.586 -.001v-6.999a2 2 0 0 0 -2 -2h-4z"></path>
                        </svg>
                        Descargar
                    </a>
                </div>

            </div>
        </div>

        <div class="paquete">
            <div class="swiper paquete__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitintermedio/intermedio1.avif" type="image/avif">
                            <source srcset="build/img/kitintermedio/intermedio1.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitintermedio/intermedio1.png" alt="Imagen Kit Intermedio Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitintermedio/intermedio2.avif" type="image/avif">
                            <source srcset="build/img/kitintermedio/intermedio2.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitintermedio/intermedio2.png" alt="Imagen Kit Intermedio Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitintermedio/intermedio3.avif" type="image/avif">
                            <source srcset="build/img/kitintermedio/intermedio3.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitintermedio/intermedio3.png" alt="Imagen Kit Intermedio Alternativa">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="paquete__contenedor-info">
                <h3 class="paquete__nombre">Kit Intermedio</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Tapete de relajación: </span>Tapete de relajación: Tapete ligero y plegable para uso en áreas de descanso y actividades de estiramiento.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">2 cojines ergonómicos para yoga: </span>Facilitan las posiciones de yoga intermedias.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Guía de Relajación Intermedia: </span>Ejercicios de estiramiento y posturas intermedias.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Termo de 500ml: </span>Pequeña botella plegable para hidratación durante la visita.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Toalla: </span>Para el momento de realizar los ejercicios.
                    </li>
                </ul>
    
                <p class="paquete__precio">$24.64</p>

                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container-kitintermedio"></div>
                    </div>
                </div>

                <div class="descarga">
                    <a href="ruta-del-archivo" download="nombre-del-archivo" class="boton-descarga">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                            <path d="M10 2l-.15 .005a2 2 0 0 0 -1.85 1.995v6.999l-2.586 .001a2 2 0 0 0 -1.414 3.414l6.586 6.586a2 2 0 0 0 2.828 0l6.586 -6.586a2 2 0 0 0 .434 -2.18l-.068 -.145a2 2 0 0 0 -1.78 -1.089l-2.586 -.001v-6.999a2 2 0 0 0 -2 -2h-4z"></path>
                        </svg>
                        Descargar
                    </a>
                </div>
            </div>
        </div>

        <div class="paquete">
            <div class="swiper paquete__swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitavanzado/avanzado1.avif" type="image/avif">
                            <source srcset="build/img/kitavanzado/avanzado1.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitavanzado/avanzado1.png" alt="Imagen Kit Avanzado Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitavanzado/avanzado2.avif" type="image/avif">
                            <source srcset="build/img/kitavanzado/avanzado2.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitavanzado/avanzado2.png" alt="Imagen Kit Avanzado Alternativa">
                        </picture>
                    </div>
                    <div class="swiper-slide">
                        <picture>
                            <source srcset="build/img/kitavanzado/avanzado3.avif" type="image/avif">
                            <source srcset="build/img/kitavanzado/avanzado3.webp" type="image/webp">
                            <img loading="lazy" width="200" src="build/img/kitavanzado/avanzado3.png" alt="Imagen Kit Avanzado Alternativa">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="paquete__contenedor-info">
                <h3 class="paquete__nombre">Kit Avanzado</h3>
                <ul class="paquete__lista">
                    <li class="paquete__elemento paquete__elemento--margin">
                        <span class="paquete__elemento-nombre paquete__elemento-nombre--regular">Incluye todos los elementos de los kits anteriores, más los siguientes componentes: </span>
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Guía Completa de Relajación: </span>Incluye una secuencia de respiración, automasaje, posturas de estiramiento, y técnicas de mindfulness.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Termo de 1L: </span>Para mayor hidratación durante la realización de ejercicios.
                    </li>
                    <li class="paquete__elemento">
                        <span class="paquete__elemento-nombre">Aceite esencial: </span>Para mejorar la experiencia de relajación durante las posturas.
                    </li>
                </ul>
    
                <p class="paquete__precio">$29.48</p>

                <div id="smart-button-container">
                    <div style="text-align: center;">
                        <div id="paypal-button-container-kitavanzado"></div>
                    </div>
                </div>

                <div class="descarga">
                    <a href="ruta-del-archivo" download="nombre-del-archivo" class="boton-descarga">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                            <path d="M10 2l-.15 .005a2 2 0 0 0 -1.85 1.995v6.999l-2.586 .001a2 2 0 0 0 -1.414 3.414l6.586 6.586a2 2 0 0 0 2.828 0l6.586 -6.586a2 2 0 0 0 .434 -2.18l-.068 -.145a2 2 0 0 0 -1.78 -1.089l-2.586 -.001v-6.999a2 2 0 0 0 -2 -2h-4z"></path>
                        </svg>
                        Descargar
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<style>

.descarga {
    display: flex;
    justify-content: center; /* Centra el contenido horizontalmente */
    align-items: center; /* Centra el contenido verticalmente */ /* Ocupa el 100% de la altura de la ventana */
    margin-top: 3rem;
}

    .boton-descarga {
    display: inline-flex;
    align-items: center;
    padding: 12px 20px;
    background-color: #00c8c2;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    border-radius: 50px;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-transform: uppercase;
}

.boton-descarga svg {
    margin-right: 10px;
    width: 20px;
    height: 20px;
    fill: #fff;
}

.boton-descarga:hover {
    background-color: #45a049;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.boton-descarga:active {
    background-color: #388e3c;
    transform: translateY(1px);
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
}
</style>

<script src="https://www.paypal.com/sdk/js?client-id=ASVpC_uwgL3TZdMPIdASvr65g9zLMs6AKnkX2s2kBSSdwOT-WKLYi6nuWYpMtivIa3r3XI_x9gKgYmzA&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
 
<script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"1","amount":{"currency_code":"USD","value":15.42}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
 
            const datos = new FormData();
            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            fetch('/finalizar-registro/pagar', {
                method: 'POST',
                body: datos
            })
            .then( respuesta => respuesta.json())
            .then( resultado => {
                if (resultado.resultado) {
                    console.log(resultado);
                    const url = `/boleto?id=${resultado.token}`; // suponiendo que el servidor te manda el token o ID
                    window.location.href = url; // 🔥 Aquí rediriges a la vista HTML
                }
            })
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-kitbasico');

      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"2","amount":{"currency_code":"USD","value":24.64}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
 
            const datos = new FormData();
            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            fetch('/finalizar-registro/pagar', {
                method: 'POST',
                body: datos
            })
            .then( respuesta => respuesta.json())
            .then( resultado => {
                if (resultado.resultado) {
                    console.log(resultado);
                    const url = `/boleto?id=${resultado.token}`; // suponiendo que el servidor te manda el token o ID
                    window.location.href = url; // 🔥 Aquí rediriges a la vista HTML
                }
            })
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-kitintermedio');

      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
        },
 
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"description":"3","amount":{"currency_code":"USD","value":29.48}}]
          });
        },
 
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
 
            const datos = new FormData();
            datos.append('paquete_id', orderData.purchase_units[0].description);
            datos.append('pago_id', orderData.purchase_units[0].payments.captures[0].id);

            fetch('/finalizar-registro/pagar', {
                method: 'POST',
                body: datos
            })
            .then( respuesta => respuesta.json())
            .then( resultado => {
                if (resultado.resultado) {
                    console.log(resultado);
                    const url = `/boleto?id=${resultado.token}`; // suponiendo que el servidor te manda el token o ID
                    window.location.href = url; // 🔥 Aquí rediriges a la vista HTML
                }
            })
          });
        },
 
        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container-kitavanzado');

    }
    initPayPalButton();
</script> 