<?php
/* 
4-Una función que reciba como parámetros el valor del radio de la base y la altura de un cilindro
  y devuelva el volumen del cilindro, teniendo en cuenta que el volumen de un cilindro se calcula como 
  Volumen = númeroPi * radio * radio * altura 
  siendo númeroPi = 3.1416 aproximadamente.
*/
    $base = $_GET['base'];
    $altura = $_GET['altura'];


    function volumen($base, $altura) {
        $numeroPi = 3.1416;
        return 'Este es el volumen del cilindro: '.$numeroPi * $base * $base * $altura.'cm3';
    }

    print(volumen($base, $altura));
?>