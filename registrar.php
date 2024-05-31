<?php
// Verificar si el formulario se está ejecutando correctamente
include("con_db.php");

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $contraseña = trim($_POST['Contraseña']);
    // Nuevo campo para el rol $role = trim($_POST['role']); // Nuevo campo para el rol
    $fechareg = date("d/m/y");

    // Validar que todos los campos estén completos
    if (empty($name) || empty($email) || empty($contraseña)) {
        echo '<h3 class="bad">Por favor, completa todos los campos.</h3>';
    } else {
        // Validar el formato del correo electrónico
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<h3 class="bad">El formato del correo electrónico no es válido.</h3>';
        } else {
            // Verificar si el correo electrónico ya está registrado
            $consulta_verificar = "SELECT * FROM datos WHERE email = '$email'";
            $resultado_verificar = mysqli_query($conex, $consulta_verificar);

            if (mysqli_num_rows($resultado_verificar) > 0) {
                // El correo electrónico ya existe, mostrar un mensaje de error
                echo '<h3 class="bad">El correo electrónico ya está registrado.</h3>';
            } else {
                // El correo electrónico no está registrado, proceder con el registro
                $consulta_insertar = "INSERT INTO datos(nombre, email, Contraseña, fecha_reg) VALUES ('$name','$email','$contraseña','$fechareg')";
                $resultado_insertar = mysqli_query($conex, $consulta_insertar);

                if ($resultado_insertar) {
                    // Registro exitoso
                    echo '<h3 class="ok" >¡Te has inscrito correctamente!</h3>';
                } else {
                    // Registro fallido, mostrar un mensaje de error
                    echo '<h3 class="bad">¡Ups, ha ocurrido un error al registrarse!</h3>';
                }
            }
        }
    }
}
?>


