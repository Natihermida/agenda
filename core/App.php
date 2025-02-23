<?php
namespace Formacom\Core;

class App {
    protected $controller = "Formacom\\Controllers\\AgendaController"; // controlador por defecto
    protected $method = "index"; // método por defecto
    protected $params = []; // parámetros por defecto

    public function __construct() {
        $url = $this->parseUrl(); // obtiene la url
        var_dump($url); // Debug para ver qué está recibiendo
        
        // Verifica si hay un controlador especificado en la URL
        if (isset($url[0]) && file_exists('./app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = "Formacom\\Controllers\\" . ucfirst($url[0]) . 'Controller';
            unset($url[0]); // Eliminar el controlador de la URL
        } else {
            // Si el controlador por defecto no existe, detener la ejecución
            if (!class_exists($this->controller)) {
                die("Controlador no encontrado: " . $this->controller);
            }
        }

        // Crea una instancia del controlador
        $this->controller = new $this->controller;

        // Verificar el método
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]); // Eliminar el método de la URL
            } else {
                die("Método no encontrado: " . $url[1]);
            }
        }

        // Verificar parámetros
        $this->params = $url ? array_values($url) : []; // obtiene los parámetros

        // Llama al método del controlador con los parámetros
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() { // obtiene la url
        if (isset($_GET['url'])) { // si se ha pasado una url
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return []; // Devuelve un array vacío si no hay URL
    }
}
