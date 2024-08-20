<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <?php
    // Verificar si el formulario ha sido enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        
        // Mostrar un mensaje de bienvenida
        echo "<h1>Bienvenido, $nombre!</h1>";
        echo "<p>Tu correo electrónico es: $email</p>";
        return;
    } else {
        // Mostrar el formulario si no se ha enviado
    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <br><br>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    <?php
    }
    ?>
</body>
</html>