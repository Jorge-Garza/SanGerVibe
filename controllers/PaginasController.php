<?php

namespace Controllers;
use Model\Opinion;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            'titulo' => 'Sobre SanGerVibe'
        ]);
    }

    public static function negocio(Router $router) {

        $router->render('paginas/sangervibe', [
            'titulo' => 'Sobre SanGerVibe'
        ]);
    }

    public static function paquetes(Router $router) {

        $router->render('paginas/paquetes', [
            'titulo' => 'Kits SanGerVibe'
        ]);
    }

    public static function opiniones(Router $router) {

        $opinionesUsuario = Opinion::ordenar('fecha', 'ASC');

        // debuguear($opinionesUsuario);

        $alertas = [];
        $opinion = new Opinion;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Leer imagen
            if (!empty($_FILES['imagen']['tmp_name'])) {
                
                $carpeta_imagenes = '../public/img/usuarios';

                // Crear la carpeta si no existe
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0755, true);
                }

                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])->fit(800,800)->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;

            }

            $opinion->sincronizar($_POST);

            // validar
            $alertas = $opinion->validar();

            
            // Guardar registro
            if (empty($alertas)) {

                // Guardar las imagenes
                $imagen_png->save($carpeta_imagenes . '/' . $nombre_imagen . '.png');
                $imagen_webp->save($carpeta_imagenes . '/' . $nombre_imagen . '.webp');

                // Guardar en la BD
                $resultado = $opinion->guardar();
    
                if ($resultado) {
                    header('Location: /opiniones');
                } 
            }

        }

        $router->render('paginas/opiniones', [
            'titulo' => 'Reseñas',
            'tituloFormulario' => '¿Quieres compartir tu experiencia en SanGerVibe?',
            'alertas' => $alertas,
            'opinion' => $opinion,
            'opinionesUsuarios' => $opinionesUsuario
        ]);
    }
}