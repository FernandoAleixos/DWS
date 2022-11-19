<?php
    /*3-Una función que reciba cinco números enteros como parámetros 
    y muestre por pantalla el resultado de sumar los cinco números.*/

    $entrada1 = $_GET['numero1'];
    $entrada2 = $_GET['numero2'];
    $entrada3 = $_GET['numero3'];
    $entrada4 = $_GET['numero4'];
    $entrada5 = $_GET['numero5'];

    function sumatorio($entrada1, $entrada2, $entrada3, $entrada4, $entrada5) {
        return $entrada1 + $entrada2 + $entrada3 + $entrada4 + $entrada5;
    }

    print('La suma de todos los números es: '.sumatorio($entrada1, $entrada2, $entrada3, $entrada4, $entrada5));

?>