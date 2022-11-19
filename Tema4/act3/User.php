<?php
    session_start();
    include_once('db.php');
    $conectar = conexion();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Usuarios VALUES('".$user."', '".$hash."')";

    if(mysqli_query($conectar, $sql)) {
        $_SESSION['user_insertado'] = 'Usuario insertado correctamente';
        header('Location: Mostrar_user.php');
    } else {
        $_SESSION['user_no_insertado'] = 'Usuario no insertado';
        header('Location: Formulario_user.php');
    }
?>