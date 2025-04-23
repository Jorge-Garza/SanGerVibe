<main class="opiniones">
    <h2 class="opiniones__heading">Opiniones</h2>
    <p class="opiniones__descripcion">Conoce la opinión de nuestros clientes</p>

    <div class="comentarios">
        <div class="comentarios__listado slider swiper">
            <div class="swiper-wrapper">
                <?php foreach($opinionesUsuarios as $opinionUsuario) { ?>
                    <div class="comentario swiper-slide">
                        <p class="comentario__fecha"><?php echo $opinionUsuario->fecha ?></p>
        
                        <div class="comentario__informacion">
                            <h4 class="comentario__clasificacion"><?php echo $opinionUsuario->clasificacion ?></h4>
        
                            <div>
                                <p class="comentario__comentario-autor">
                                    <?php echo $opinionUsuario->opinion ?>
                                </p>
                            </div>
                            
                            <div class="comentario__autor-info">
                                <picture>
                                    <!-- <source srcset="img/speakers/6ef7ce7849c1b409ff52bbf6dac4c610.png' ?>" type="image/png"> -->
                                    <img class="comentario__imagen-autor" loading="lazy" width="200" height="300" src="img/usuarios/<?php echo $opinionUsuario->imagen; ?>.png" alt="Imagen Usuario">
                                    
                                </picture>
        
                                <p class="comentario__autor-nombre"><?php echo $opinionUsuario->nombre . " " . $opinionUsuario->apellido ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> <!-- swiper-wrapper -->

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <h2 class="formulario__heading"><?php echo $tituloFormulario; ?></h2>

    <div class="auth">
        
        <?php 
            include_once(__DIR__ . '/../templates/alertas.php');
        ?>

        <form method="POST" action="/opiniones" enctype="multipart/form-data" class="formulario">
            <div class="formulario__campo">
                <label for="nombre" class="formulario__label">Nombre</label>
                <input 
                    type="text"
                    class="formulario__input"
                    placeholder="Tu Nombre"
                    id="nombre"
                    name="nombre"
                    value="<?php echo $opinion->nombre ?? ''; ?>"
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
                    value="<?php echo $opinion->apellido ?? ''; ?>"
                >
            </div>

            <div class="formulario__campo">
                <label for="imagen" class="formulario__label">Adjuntar Imagen</label>
                <input 
                    type="file"
                    class="formulario__input formulario__input--file"
                    id="imagen"
                    name="imagen"
                    accept="image/*"  
                >
            </div>

            <div class="formulario__campo">
                <label for="clasificacion" class="formulario__label">Clasificación del Servicio</label>
                <select 
                    class="formulario__input"
                    id="clasificacion"
                    name="clasificacion"
                >
                    <option value="Calificación General del Servicio">Calificación General del Servicio</option>
                    <option value="Calificación de las Aguas Termales">Calificación de las Aguas Termales</option>
                    <option value="Kits de Relajación">Kits de Relajación</option>
                    <option value="Servicio y Atención al Cliente">Servicio y Atención al Cliente</option>
                    <option value="Facilidades e Instalaciones">Facilidades e Instalaciones</option>
                    <option value="Ambiente y Ambiente Relajante">Ambiente y Ambiente Relajante</option>
                    <option value="Ubicación y Accesibilidad">Ubicación y Accesibilidad</option>
                    <option value="Relación Calidad-Precio">Relación Calidad-Precio</option>
                    <option value="Experiencia General">Experiencia General</option>
                    <option value="Limpieza y Mantenimiento">Limpieza y Mantenimiento</option>
                    <option value="Seguridad">Seguridad</option>
                </select>
            </div>

            <div class="formulario__campo">
                <label for="opinion" class="formulario__label">Comentario</label>
                <textarea 
                    class="formulario__input"
                    placeholder="Escribe tu comentario"
                    id="opinion"
                    name="opinion"
                    value="<?php echo $opinion->opinion ?? ''; ?>"
                ></textarea>

            <input type="submit" class="formulario__submit" value="Enviar">
        </form>
    </div>
</main>