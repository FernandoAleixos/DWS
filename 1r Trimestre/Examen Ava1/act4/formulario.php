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

        if(isset($_SESSION['No_insertado'])){
            echo '<p>'.$_SESSION['No_insertado'].'</p>';
            unset($_SESSION['No_insertado']);
        }

        if(isset($_SESSION['aula_no_insertada'])){
            echo '<p>'.$_SESSION['aula_no_insertada'].'</p>';
            unset($_SESSION['aula_no_insertada']);
        }
    ?>
    
    <form action="insertar.php" method="post">
        <p>Id <input type="hidden" name="id"></p>
        <p>Nombre centro <input type="text" name="nombre" required></p>
        <p>Ciudad <input type="text" name="ciudad" required></p>
        <p>Total aulas <input type="number" name="total" required></p>
        <input type="submit" name="Enviar">
        <input type="reset" name="Borrar">
    </form>
</body>
</html>