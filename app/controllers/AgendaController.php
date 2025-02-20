<?php
namespace Formacom\controllers;
use Formacom\Core\Controller;
use Formacom\models\Contacto;
use Formacom\models\User;

class AgendaController extends Controller{
    public function index(...$params){
        $data=["mensaje"=>"Hola desde Index de AgendaController"];
        $tareas=Contacto::all();
        //$user=User::all();
        //
        $this->view("listaContactos", $tareas);
    }
    public function edit(...$params){
        $task=Contacto::find($params[0]);

        if(isset($_POST["email"])){
            $task=new Contacto();
            $task->nombre=$_POST["nombre"];
            $task->telefono=$_POST["telefono"];
            $task->email=$_POST["email"];
            $task->direccion=$_POST["direccion"];
            /*$task->Usuarios_id=3;*/
            $task->save();
            header("Location: /agenda");
            exit();
     }
     $this->view("editarContacto",$task);
 }

public function new(){
 if(isset($_POST["nombre"])){
     $task=new Contacto();
     $task->nombre=$_POST["nombre"];
     $task->telefono=$_POST["telefono"];
     $task->email=$_POST["email"];
     $task->direccion=$_POST["direccion"];
     /*$task->Usuarios_id=3;*/
     $task->save();
     header("Location: /agenda");
     exit();
 }
 $this->view("nuevoContacto");
}

public function delete(...$params){
 $tarea=Contacto::find($params[0]);
 $tarea->delete();
 header("Location: /agenda");
}

}


?>
