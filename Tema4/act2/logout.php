<?php
    session_start();
    unset($_SESSION['usuario_correcto']);
    header('Location: form_login.php');
?>