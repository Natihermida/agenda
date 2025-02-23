<?php
namespace Formacom\Core;
//SE CREA ESTA CLASE PARA QUE OTRAS HEREDEN DE ELLA
//ESTO ES PARA QUE SE CUMPLA EL PATRON DE DISEÑO MVC
//abstracta para que nadie pueda crear objetos de esta clase
use Formacom\Core\Controller; // Importa correctamente la clase base
abstract class Controller {
    abstract public function index(...$params);

    public function view($view, $data = []) {
        require_once './app/views/' . $view . '.php';
    }
}