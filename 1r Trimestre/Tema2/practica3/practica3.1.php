<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 3</title>
</head>
<body>
    <?php
        //Mostrar la tabla de multiplicar del 2
        for($i = 0; $i <= 10; $i++) {
            $multiplicacion = $i * 2;
            printf('-' .$multiplicacion. '<br>');
        }
    ?>
</body>
</html>