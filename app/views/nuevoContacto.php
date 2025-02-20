<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL?>css/style.css">
    <title>Nuevo Contacto</title>
</head>
<body>
    <h3>Nueva Contacto</h3>
    <form action="" method="post">
       <input type="text" name="nombre" placeholder ="nombre"> 
       <input type="text" name="telefono" placeholder="telefono" required>
       <input type="text" name="email" placeholder ="email">
       <input type="text" name="direccion" placeholder ="direccion">


   
        <input type="submit" value="Agregar Contacto">

    </form>
</body>
</html>
