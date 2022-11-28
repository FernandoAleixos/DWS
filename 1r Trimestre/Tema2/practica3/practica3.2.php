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
        $comentario = 'Muy divertido y entretenido';
        //$comentario = 'qwertyuiopasdfghjklñzxcvbnmqwertyuiopasdfghjklñzxcvbnmqwertyuiopasdfghjklñzxcvbnmqwertyuipasdfghjkñzxcvbnmqwetyuiopasdfghjkñlzxvzxcvbnmqwertyuiopasdfghjklñzxcvbnmqwertyuipoasdfghjklñ';
        $caracter = strlen($comentario);

        if($caracter > 150) {
            printf('La longitud máxima de los comentarioses de 150, tu comentario en cambio tiene ' .$caracter. ' caracteres.');
        } else {
            echo 'hola';
        }
    ?>
</body>
</html>