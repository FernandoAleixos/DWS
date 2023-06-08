<?php
    $user = $_POST['user'];
    $localidad = $_POST['localidad'];
    $pass = $_POST['pass'];

    if ($user != '' && $localidad != '' && $pass != '') {
        echo json_encode('correcto');
    } else {
        echo json_encode('error');
    }

?>