<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar la coockie</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['prueba'])) {
            echo $_COOKIE['prueba'];
        } else {
            echo 'No hay coockies';
        } 
    ?>
</body>
</html>