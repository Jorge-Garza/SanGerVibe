<?php 

    namespace Model;

    class Registro extends ActiveRecord {

        public $id;
        public $paquete_id;
        public $pago_id;
        public $token;
        public $usuario_id;

        public $usuario;
        public $paquete;

        protected static $tabla = 'registros';
        protected static $columnasDB = ['id', 'paquete_id', 'pago_id', 'token', 'usuario_id'];

        public function __construct($args = []) 
        {
            $this->id = $args['id'] ?? null;
            $this->paquete_id = $args['paquete_id'] ?? '';
            $this->pago_id = $args['pago_id'] ?? '';
            $this->token = $args['token'] ?? '';
            $this->usuario_id = $args['usuario_id'] ?? '';
        }
    }

?>