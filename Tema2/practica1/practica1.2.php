<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Actividad 5: Hacer el uso de if para calcular el mayor de dos enteros.
        $n1 = 3;
        $n2 = 5;

        if($n1 < $n2) {
            echo 'El segundo número es mayor <br>';
        } else {
            echo 'El primer número mayor <br>';
        }

        //Actividad 6: Unir dos frases haciendo cadena.
        $cadena1 = 'Hola';
        $cadena2 = 'buenas tardes';

        echo $cadena1.' '.$cadena2.'<br>';

        //Actividad 7: Crear un array con los días de la semana y mostrar en pantalla un dia a elegir.
        $dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

        echo 'El dia de la semana es: ' .$dias[3];
    ?>
</body>
</html>