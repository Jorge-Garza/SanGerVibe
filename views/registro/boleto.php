<main class="pagina">
    <h2 class="pagina__heading"><?php echo $titulo; ?></h2>
    <p class="pagina__descripcion">Tu boleto - Te recomendamos almacenarlo</p>

    <div class="boleto-virtual">
        <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?>">
            <div class="boleto__contenido">
                <h4 class="boleto__logo">SanGerVibe</h4>
                <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
                <p class="boleto_nombre"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?></p>
            </div>

            <p class="boleto__codigo"><?php echo '#' . $registro->token; ?></p>
        </div>
    </div>
</main>