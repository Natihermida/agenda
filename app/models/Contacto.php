<?php
namespace Formacom\models;

use Illuminate\Database\Eloquent\Model; // Importar la clase Model de Eloquent

class Contacto extends Model {
    protected $table = "contactos"; // Nombre de la tabla en la base de datos
    protected $primaryKey = "id_contactos"; // Clave primaria
    public $timestamps = false; // Desactivar las marcas de tiempo si no se utilizan

    // Puedes agregar métodos adicionales aquí si los necesitas
}
?>
