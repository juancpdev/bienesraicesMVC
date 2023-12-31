<?php

namespace Model;

class Vendedor extends ActiveRecord {
    
    protected static $tabla = 'vendedores';
    protected static $columnasDB = ['id', 'imagen', 'nombre', 'apellido', 'telefono'];
   
    public $id;
    public $imagen;
    public $nombre;
    public $apellido;
    public $telefono;

    public function __construct($args = []) 
    {
        $this->id = $args['id'] ?? null;
        $this->imagen = $args['imagen'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
    }

    public function validar() {
 
        if(!$this->imagen) {
            self::$errores[] = "Elige una Imagen";
        }
        if(!$this->nombre) {
            self::$errores[] = "El nombre es obligatorio";
        }
        if(!$this->apellido) {
            self::$errores[] = "El apellido es obligatorio";
        }
        if(!$this->telefono) {
            self::$errores[] = "El telefono es obligatorio";
        }


        return self::$errores;
    }
}