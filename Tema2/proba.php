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
        $primera = 10;
        $segunda = 5;

        $cuadrado = pow($segunda, 2);
        $elevado = $primera ** $segunda;
        $raiz = sqrt($segunda);

        $resta = $primera - $segunda;
        $division = $primera / $segunda;

        $aleatorio = rand(1, 10);
        $aleatorioMejorado = mt_rand(1, 10);

        $arrayFijo = new SplFixedArray(5);
        $arrayFijo = ['hola'];

        $array = setSize(10);
        $contador = count($array);


        if($primera = $segunda) {
            echo 'Son iguales';
        } else {
            echo 'No son iguales';
        }

        printf('Texto', $primera);
        $a = sprintf('Texto');

        $b = '3.14';
        settype($b, "float");

        print(gettype($b));

        switch($a) {
            case 0:
                echo 'a vale 0';
                break;
            case 1:
                echo 'a vale 1';
                break;

            default:
            echo 'ninguna de las dos';
        };

        include 'fichero';

        foreach ($array as $b) {
            echo $b;
        }

        $campo = $_GET['campo'];
        
        if($campo % 2 == 0) {
            echo 'Es par';
        } else {
            echo 'Es impar';
        }
    ?>
</body>
</html>