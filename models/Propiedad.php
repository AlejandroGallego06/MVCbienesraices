<?php

namespace Model;

class Propiedad extends ActiveRecord
{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedor'];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedor;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedor = $args['vendedor'] ?? '';
    }

    public function validar()
    {

        if (!$this->titulo) {
            self::$errores[] = "Debes añadir un titulo";
        }

        if (!$this->precio) {
            self::$errores[] = 'El Precio es Obligatorio';
        }

        if (strlen($this->descripcion) < 50) {
            self::$errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        if (!$this->habitaciones) {
            self::$errores[] = 'El Número de habitaciones es obligatorio';
        }

        if (!$this->wc) {
            self::$errores[] = 'El Número de Baños es obligatorio';
        }

        if (!$this->estacionamiento) {
            self::$errores[] = 'El Número de lugares de Estacionamiento es obligatorio';
        }

        if (!$this->vendedor) {
            self::$errores[] = 'Elige un vendedor';
        }

        if (!$this->imagen) {
            self::$errores[] = 'La Imagen es Obligatoria';
        }

        return self::$errores;
    }
}
