<?php

namespace Controllers;

use MVC\Router;

class RegistroController {

    public static function crear(Router $router) {

        $router->render('registro/crear', [
            'titulo' => 'Finalizar Registro'
        ]);

    }

    public static function pagar(Router $router) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_auth()) {
                header('Location: /login');
            }

            // Validar que Post no venga vacio
            if(empty($_POST)) {
                echo json_encode([]);
                return; 
            }

            $token = substr( md5(uniqid( rand(), true )), 0, 8);

            // Crear registro
            $datos = $_POST;

            debuguear($datos);

            $registro = new Registro($datos);
            $resultado = $registro->guardar();

            if ($resultado) {
                header('Location: /boleto?id=' . urldecode($registro->token));
            }
        }

    }

}