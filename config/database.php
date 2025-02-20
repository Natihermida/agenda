<?php
require "vendor/autoload.php";
require"config.php";//  importar la clase autoload de composer
use Illuminate\Database\Capsule\Manager as Capsule;//importar la clase Capsule de Eloquent

$capsule = new Capsule;

$capsule->addConnection([//configuracion de la base de datos
    'driver' => 'mysql',
    'host' => HOST,
    'database' => DB_DATABASE,
    'username' => DB_USER,
    'password' => DB_PASS,
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

?>
