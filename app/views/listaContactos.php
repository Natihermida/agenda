<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
    <title>Lista de Contactos</title>
</head>

<body>
    <h1>Lista de Contactos</h1>

    <!-- Mostrar las tareas -->
    <?php
    foreach ($data as $tarea): ?>

        <li>
            <strong><?php echo $tarea->nombre; ?></strong>:
            <?php $tarea->telefono; ?>
            <a href="/agenda/agenda/edit/<?= $tarea->id_contactos ?>">Editar</a>
            <a href="/agenda/agenda/delete/<?= $tarea->id_contactos ?>">Eliminar</a>
        </li>
    <?php endforeach; ?>



    <br>
         <a href="/agenda/contacto/new/">Agregar nuevo contacto</a>
</body>

</html>