<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    <title>Nuevo Contacto</title>
</head>
<body>
    <h1>Nuevo Contacto</h1>
    <form action='<?= BASE_URL ?>agenda/new' method='post'>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="direccion" placeholder="Dirección" required>
        <input type='submit' value='Guardar contacto'>
    </form>
</body>
</html>
