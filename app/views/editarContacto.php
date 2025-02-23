<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= BASE_URL?>css/style.css">
    <title>Editar Contacto</title>

</head>
<body>
    <h1>Editar Contacto</h1>

    <!-- Mostrar el formulario para editar la tarea -->


    <form action='<?= BASE_URL ?>agenda/edit/<?= $task->id ?>' method='post'>
    <input type="text" name="nombre" value="<?= $task->nombre ?>">
    <input type='text' name='telefono' value='<?= $task->telefono ?>' required>
    <input type="text" name="email" value='<?= $task->email ?>' required>
    <input type="text" name="direccion" value='<?= $task->direccion ?>' required>
    <input type='submit' value='Guardar cambios'>
</form>

 

    <br>
    
</body>
</html>
