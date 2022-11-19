<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 3</title>
</head>
<body>
    <?php
        $horasTotales = 5;
        $horasVuelo = 1;
        $maxHoras = 12;

        if(($horasTotales + $horasVuelo) > $maxHoras) { //si el número de horas totales es mayor al de las horas máximas
            echo 'El número de horas supera el límite';
        } elseif(($horasTotales + $horasVuelo) <= $maxHoras) { 
            $horasTotales += $horasVuelo;
            echo $horasTotales;
        }
    ?>
</body>
</html>