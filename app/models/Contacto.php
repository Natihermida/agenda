<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;//uso el namespace de la clase Model

class Contacto extends Model{
    protected $table="contactos";
    protected $primaryKey="id_contactos";
    public $timestamps=false;
}

?>