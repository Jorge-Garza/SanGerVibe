<main class="opiniones">
    <h2 class="opiniones__heading">Opiniones</h2>
    <p class="opiniones__descripcion">Conoce la opinión de nuestros clientes</p>

    <div class="comentarios">
        <div class="comentarios__listado">
            <div>
                <div class="comentario">
                    <p class="comentario__fecha">25 Marzo 2025</p>
    
                    <div class="comentario__informacion">
                        <h4 class="comentario__clasificacion">Calificación General del Servicio</h4>
    
                        <div>
                            <p class="comentario__comentario-autor">
                                Las aguas termales fueron increíblemente relajantes, me sentí renovado/a después de la experiencia.
                            </p>
                        </div>
                        
                        <div class="comentario__autor-info">
                            <picture>
                                <!-- <source srcset="img/speakers/6ef7ce7849c1b409ff52bbf6dac4c610.png' ?>" type="image/png"> -->
                                <img class="comentario__imagen-autor" loading="lazy" width="200" height="300" src="build/img/speakers/2a41a781d8ae8f0f7a1969c766276b08.png" alt="Imagen Usuario">
                                
                            </picture>
    
                            <p class="comentario__autor-nombre">Mauricio Rodriguez</p>
                        </div>
                    </div>
                </div>

                <div class="comentario">
                    <p class="comentario__fecha">26 Marzo 2025</p>
    
                    <div class="comentario__informacion">
                        <h4 class="comentario__clasificacion">Calificación de las Aguas Termales</h4>
    
                        <div>
                            <p class="comentario__comentario-autor">
                                Un lugar perfecto para desconectar y disfrutar de un baño termal. Muy recomendable para aliviar el estrés.
                            </p>
                        </div>
                        
                        <div class="comentario__autor-info">
                            <picture>
                                <!-- <source srcset="img/speakers/6ef7ce7849c1b409ff52bbf6dac4c610.png' ?>" type="image/png"> -->
                                <img class="comentario__imagen-autor" loading="lazy" width="200" height="300" src="build/img/speakers/c0ff09fe88897bb9201bc2fce1b04d28.png" alt="Imagen Usuario">
                                
                            </picture>
    
                            <p class="comentario__autor-nombre">Roberto Villegas</p>
                        </div>
                    </div>
                </div>

                <div class="comentario">
                    <p class="comentario__fecha">27 Marzo 2025</p>
    
                    <div class="comentario__informacion">
                        <h4 class="comentario__clasificacion">Kits de Relajación</h4>
    
                        <div>
                            <p class="comentario__comentario-autor">
                            Los kits de relajación son geniales, tienen todo lo que necesitas para una experiencia completa de bienestar.
                            </p>
                        </div>
                        
                        <div class="comentario__autor-info">
                            <picture>
                                <!-- <source srcset="img/speakers/6ef7ce7849c1b409ff52bbf6dac4c610.png' ?>" type="image/png"> -->
                                <img class="comentario__imagen-autor" loading="lazy" width="200" height="300" src="build/img/speakers/55c7866df31370ec3299eed6eb63daa1.png" alt="Imagen Usuario">
                                
                            </picture>
    
                            <p class="comentario__autor-nombre">Alejandra Sanchez</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="formulario__heading">¿Quieres compartir tu experiencia en SanGerVibe?</h2>

    <div class="auth">
        <form method="POST" action="/registro" class="formulario">
            <div class="formulario__campo">
                <label for="nombre" class="formulario__label">Nombre</label>
                <input 
                    type="text"
                    class="formulario__input"
                    placeholder="Tu Nombre"
                    id="nombre"
                    name="nombre"
                >
            </div>

            <div class="formulario__campo">
                <label for="nombre" class="formulario__label">Apellido</label>
                <input 
                    type="text"
                    class="formulario__input"
                    placeholder="Tu Apellido"
                    id="apellido"
                    name="apellido"
                >
            </div>

            <div class="formulario__campo">
                <label for="imagen" class="formulario__label">Adjuntar Imagen</label>
                <input 
                    type="file"
                    class="formulario__input"
                    id="imagen"
                    name="imagen"
                    accept="image/*"  
                >
            </div>

            <div class="formulario__campo">
                <label for="comentario" class="formulario__label">Comentario</label>
                <textarea 
                    class="formulario__input"
                    placeholder="Escribe tu comentario"
                    id="comentario"
                    name="comentario"
                ></textarea>

            <input type="submit" class="formulario__submit" value="Enviar">
        </form>
    </div>
</main>