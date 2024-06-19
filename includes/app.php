<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// if (class_exists('Intervention\Image\ImageManagerStatic')) {
//     echo "La clase ImageManagerStatic se cargó correctamente.";
// } else {
//     echo "Error: La clase ImageManagerStatic no se encontró.";
// }


//Conexión a la base de datos
$db = conectarDB();

use Model\ActiveRecord;

ActiveRecord::setDB($db);
