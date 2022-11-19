<?php
    include_once('db.php');
    $conectar = conexion();

    session_start();

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM Usuarios WHERE trim(user) = trim('".$user."')";

    $resultado = mysqli_query($conectar, $sql);

    if($resultado) {
        $fila = mysqli_fetch_assoc($resultado);

        if(password_verify($pass, $fila['pass'])) {
            setcookie("usuario", $user, time() + 120);
            header('Location: cookie.php');
        } else {
            $_SESSION['nologin'] = 'Login fallido';
            header('Location: inicio.php');
        }
    } else {
        $_SESSION['usuario_incorrecto'] = 'Usuario o contraseña incorrectos';
            header('Location: inicio.php');
    }
?>