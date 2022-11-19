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
        $edadUsuario = 65;

        if($edadUsuario < 18) { //comprobaremos si la edad es menor de 18 años.
            echo 'Prohibido el acceso.';
        } elseif($edadUsuario >= 18 && $edadUsuario <= 65) { //seguidamente comprobamos si esta entre 18 y 65 años.
            echo 'Bienvenido a la web www.srcodigofuente.es/adultos-no-jubilados.';
        } else { //finalmente si no es ninguno de los casos anteriores es que tiene una edad mayor a 65 años.
            echo 'Lo sentimos, el contenido de esta página no es para jubilados.';
        }
    ?>    
</body>
</html>