<?php 

namespace Model;

class Opinion extends ActiveRecord {
    protected static $tabla = 'opiniones';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'imagen', 'opinion', 'clasificacion'];

    public $id;
    public $nombre;
    public $apellido;
    public $imagen;
    public $opinion;
    public $clasificacion;
    public $fecha;
    
    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->opinion = $args['opinion'] ?? '';
        $this->clasificacion = $args['clasificacion'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if(!$this->opinion) {
            self::$alertas['error'][] = 'El Campo opinion es obligatorio';
        }
        if(!$this->clasificacion) {
            self::$alertas['error'][] = 'El Campo clasificacion es obligatorio';
        }
    
        return self::$alertas;
    }
}