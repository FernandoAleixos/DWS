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
        //Actividad 1: Realizar una multiplicación y una suma entre dos números aleatorios.
        $n1 = rand(1, 9);
        $n2 = rand(1, 9);

        $suma = $n1 + $n2;

        echo 'La suma es: ' .$suma. '<br>';
        
        //Actividad 2:  Hacer la raíz cuadrada de un número.
        $raiz = sqrt($n1);

        echo 'La raiz es: ' .$raiz. '<br>';

        //Actividad 3: Elevar al cuadrado un número aleatorio.
        $cuadrado = pow($n1, 2);

        echo 'La cuadrado de es: ' .$cuadrado. '<br>';

        //Actividad 4: Elevar un número a otro. Ambos definidos por nosotros mismos.
        $n3 = 3;
        $n4 = 5;

        $elevado = $n3 ** $n4;

        echo 'El elevado es: ' .$elevado;
    ?>    
    
</body>
</html>