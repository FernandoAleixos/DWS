<?php
    $nombre = @$_POST['nombre'];
    $salario = $_POST['salario'];

    switch ($salario) {
        case 1:
            print($nombre. 'No paga impuestos.');
            break;
        case 2:
            print($nombre. ' paga el 20% de impuestos.');
            break;
        case 3: 
            print($nombre. ' paga el 50% impuestos.');
            break;
    }
?>