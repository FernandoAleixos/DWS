<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrar coockie</title>
</head>
<body>
    <?php
        setcookie("prueba", "Esta información se ha creado", time() - 1);
    ?>
</body>
</html>