<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>cookie</title>
</head>
<body>
    <?php
        // COMANDO DE CREAR
        // Creamos una coockie que recoge la variable idioma con un temporizador de 1 día
        setcookie("lang", $_GET['idioma'], time() + 86400);

        // COMANDO DE MOSTRAR

        if (!isset($_COOKIE['lang'])) {
            header('Location: portada.php');
        } else if ($_COOKIE['lang'] == 'es') {
            header('Location: espanyol.html');
        } else if ($_COOKIE['lang'] == 'en') {
            header('Location: ingles.html');
        }
    ?>
</body>
</html>