<?php

namespace Controllers;
use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [
            'titulo' => 'Inicio'
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

        $router->render('paginas/opiniones', [
            'titulo' => 'Reseñas'
        ]);
    }
}