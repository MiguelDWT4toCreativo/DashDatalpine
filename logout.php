<?php
session_start();

// Cerrar la sesión
session_destroy();

// Redirigir a la página de inicio de sesión u otra página después del cierre de sesión
header('Location: index.php');
exit;
?>
