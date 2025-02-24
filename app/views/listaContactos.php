<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
    <title>Lista de Contactos</title>
</head>

<div class="lista">
    <h1>Lista de Contactos</h1>
    <?php if (!empty($data)): ?>
        <ul>
        <?php foreach ($data as $tarea): ?>
            <li>
                <strong><?php echo $tarea->nombre; ?></strong>: <?php echo $tarea->telefono; ?>
                <a href="/agenda/agenda/edit/<?= $tarea->id_contactos ?>">Editar</a>
                <a href="/agenda/agenda/delete/<?= $tarea->id_contactos ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay contactos disponibles.</p>
    <?php endif; ?>
</div>

</html>
