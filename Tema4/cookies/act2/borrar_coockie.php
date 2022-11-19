<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Borrar coockie</title>
</head>
<body>
    <?php
        setcookie("lang", "", time() - 1);
        header('Location: portada.php');
    ?>
</body>
</html>