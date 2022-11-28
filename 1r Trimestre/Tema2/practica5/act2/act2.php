<?php
    //2- Escriba una función que nos diga si un valor entero es positivo o negativo.
    
    $a = $_GET['num'];

    function valorNum($a) {
        if(is_null($a)) {
            return 'El valor introducido no es un número';
        } else {
            if($a >= 0) {
                return 'El número es positivo';
            } else {
                return 'El número es negativo';
            }
        }
    }

    print(valorNum($a));
?>