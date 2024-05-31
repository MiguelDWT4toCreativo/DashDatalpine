<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
</head>
<body>
    <h2>Restablecer Contraseña</h2>
    <form action="procesocontrasena.php" method="post">
        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required>
        <button type="submit" name="restablecer_contraseña">Restablecer Contraseña</button>
    </form>
</body>
</html>