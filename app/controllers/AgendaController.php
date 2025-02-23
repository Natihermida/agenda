<?php
namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\models\Contacto;

class AgendaController extends Controller {
    // Muestra la lista de contactos
    public function index(...$params) {
        $data = ["mensaje" => "Hola desde Index de AgendaController"];
        $tareas = Contacto::all(); // Obtener todos los contactos
        $this->view("listaContactos", $tareas); // Renderizar la vista con los contactos
    }

    // Edita un contacto existente
    public function edit(...$params) {
        if (!isset($params[0])) {
            echo "ID de contacto no especificado.";
            return;
        }

        $task = Contacto::find($params[0]); // Utiliza Eloquent para encontrar el contacto

        if (!$task) {
            echo "Contacto no encontrado.";
            return;
        }

        // Maneja la actualización del contacto si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task->nombre = $_POST["nombre"];
            $task->telefono = $_POST["telefono"];
            $task->email = $_POST["email"];
            $task->direccion = $_POST["direccion"];
            $task->save(); // Guarda los cambios en el contacto
            header("Location: /agenda");
            exit();
        }

        // Muestra la vista para editar el contacto
        $this->view("editarContacto", $task);
    }

    // Crea un nuevo contacto
    public function new() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["nombre"])) {
            $task = new Contacto(); // Crea una nueva instancia de Contacto
            $task->nombre = $_POST["nombre"];
            $task->telefono = $_POST["telefono"];
            $task->email = $_POST["email"];
            $task->direccion = $_POST["direccion"];
            $task->save(); // Guarda el nuevo contacto
            header("Location: /agenda");
            exit();
        }
        $this->view("nuevoContacto"); // Muestra la vista para crear un nuevo contacto
    }

    // Elimina un contacto existente
    public function delete(...$params) {
        if (!isset($params[0])) {
            echo "ID de contacto no especificado.";
            return;
        }

        $tarea = Contacto::find($params[0]); // Encuentra el contacto
        if ($tarea) {
            $tarea->delete(); // Elimina el contacto
        }
        header("Location: /agenda"); // Redirige a la lista de contactos
    }
}
?>

