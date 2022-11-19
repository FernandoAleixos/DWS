<?php
    session_start();
    unset($_SESSION['usuario_correcto']);
    header('Location: Formulario_login.php');
?>