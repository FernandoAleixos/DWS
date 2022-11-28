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
        //1- Crear 4 números aleatorios entre 1 y 10, y hacer uso de las funciones AND (&&) y OR (||).
        //Mostrar en pantalla los resultados.
        $n1 = mt_rand(1, 10);
        $n2 = mt_rand(1, 10);
        $n3 = mt_rand(1, 10);
        $n4 = mt_rand(1, 10);

        if($n1 > $n2 && $n1 > $n3 && $n1 > $n4) {
            echo 'El ' .$n1. ' es el número más grande';
        } elseif($n1 > $n2 || $n1 > $n3 || $n1 > $n4) {
            echo 'El ' .$n1. ' es un númermo de los más grandes';
        } else {
            echo $n1. ' es el número más pequeño';
        }
    ?>
</body>
</html>