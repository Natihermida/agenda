<?php
namespace Formacom\Core;
use Formacom\Core\Database;
//controlador por defecto, se puede hacer aqui o en el constructor de la clase App
class App{
    protected $controller="Formacom\\Controllers\\agendaController";//controlador por defecto
    protected $method="index";//metodo por defecto
    protected $params=[];//parametros por defecto

    public function __construct(){
        $url=$this->parseUrl();//obtiene la url, esta variable es temporal porque esta en este metodo.
        if(file_exists('./app/controllers/' . ucfirst($url[0]) . 'Controller.php')) {
            $this->controller = "Formacom\\Controllers\\".ucfirst($url[0]) . 'Controller';
            unset($url[0]);
        }
        $this->controller = new $this->controller ;//crea un objeto del controlador
        //verificar metodo
        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        //verificar parametros
        $this->params = $url ? array_values($url) : [];//obtiene los parametros
        call_user_func_array([$this->controller, $this->method], $this->params);//llama al metodo del controlador
    }
        
    
        private function parseUrl() {//obtiene la url
            if(isset($_GET['url'])) {//si se ha pasado una url
                return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }//devuelve un array con los elementos de la url
            return ['task', "index"];//si no se ha pasado una url, devuelve el controlador por defecto
        }
    }

  





?>