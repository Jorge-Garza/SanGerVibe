<?php

namespace Controllers;

use MVC\Router;
use Model\Registro;
use Model\Usuario;
use Model\Paquete;

class RegistroController {

    public static function crear(Router $router) {
        /*
        if (!is_auth()) {
            header('Location: /');
        }
            */
 
            /*
        // Verificar si el usuario ya esta registrado
        $registro = Registro::where('usuario_id', $_SESSION['id']);
        if (isset($registro) && $registro->paquete_id === '3') {
            header('Location: /boleto?id=' . urldecode($registro->token));
        }*/

        $router->render('registro/crear', [
            'titulo' => 'Finalizar Registro'
        ]);

    }

    public static function pagar(Router $router) {

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            /*
            if (!is_auth()) {
                header('Location: /login');
            }
            */

            // Validar que Post no venga vacio
            if(empty($_POST)) {
                echo json_encode([]);
                return; 
            }

            // Crear registro
            session_start();
            $datos = $_POST;
            $datos['token'] = substr( md5(uniqid( rand(), true )), 0, 8);
            $datos['usuario_id'] = $_SESSION['id'];

            try {
                $registro = new Registro($datos);
                $resultado = $registro->guardar();
                echo json_encode([
                    'resultado' => true,
                    'token' => $registro->token // o el identificador que necesites para boleto
                ]);
            } catch (\Throwable $th) {
                echo json_encode([
                    'resultado' => 'error'
                ]);
            }
            /*
            if ($resultado) {
                header('Location: /boleto?id=' . urldecode($registro->token));
            }*/
        }

    }

    public static function boleto(Router $router) {

        // Validar la URL
        $id = $_GET['id'];

        if (!$id || strlen($id) !== 8) {
            header('Location: /');
        }

        // Buscarlo en la DB
        $registro = Registro::where('token', $id);
        if (!$registro) {
            header('Location: /');
        }

        // Llenar las tablas de referencia
        $registro->usuario = Usuario::find($registro->usuario_id);
        $registro->paquete = Paquete::find($registro->paquete_id);

        $router->render('registro/boleto', [
            'titulo' => 'Asistencia a SanGerVibe',
            'registro' => $registro
        ]);
    }

}