<?php
    //1- Escribir una función que calcule A elevado a B, siendo A y B números enteros.
    
    $a = $_GET['numero1'];
    $b = $_GET['numero2'];
    
    if(is_null($a) || is_null($b)) {
        echo 'No se ha encontrado ningún valor.';
    } /*elseif (is_numeric($a) || is_numeric($b)) {
        echo 'Los datos introducidos no son númericos.';
    }*/ else {
        function elevado($a, $b) {
            echo 'El elevado es: '.$a ** $b;
        }
    }

    elevado($a, $b);
?>