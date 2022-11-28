<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Ciframos la contraseña
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO log VALUES('".$user."', '".$hash."')";

    if(mysqli_query($conectar, $sql)) {
        $_SESSION['user_insertado'] = 'Usuario insertado correctamente';
        header('Location: form_user.php');
    } else {
        $_SESSION['user_no_insertado'] = 'Usuario no insertado';
        header('Location: form_user.php');
    }

?>