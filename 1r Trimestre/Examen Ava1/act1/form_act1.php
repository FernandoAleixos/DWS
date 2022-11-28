<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actividad1</title>
</head>
<body>
    <?php
        session_start();

        if(isset($_SESSION['incorrecta'])) {
            echo '<p>'.$_SESSION['incorrecta'].'</p>';
            unset($_SESSION['incorrecta']);
        }

        if(isset($_SESSION['error'])) {
            echo '<p>'.$_SESSION['error'].'</p>';
            unset($_SESSION['error']);
        }
    ?>
    <form action="actividad1.php" method="get">
        <label for="numero">Inserta la combianción correcta: </label>
        <input type="text" name="numero" required>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>