<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['no_insertado'])){
            echo '<p>'.$_SESSION['no_insertado'].'</p>';
            unset($_SESSION['no_insertado']);
        }
    ?>
    
    <form action="insertar.php" method="post">
        <p>Referencia <input type="hidden" name="Referencia"></p>
        <p>Nombre <input type="text" name="Nombre" required></p>
        <p>Cantante <input type="text" name="Cantante" required></p>
        <p>Fecha <input type="date" name="Fecha" required></p>
        <p>Estilo <input type="text" name="Estilo" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>