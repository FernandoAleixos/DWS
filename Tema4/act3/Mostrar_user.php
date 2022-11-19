<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Usuarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        session_start();
        include_once('db.php');
        $conectar = conexion();

        if(isset($_SESSION['user_insertado'])) {
            echo '<p>'.$_SESSION['user_insertado'].'</p>';
            unset($_SESSION['user_insertado']);
        }

        if(isset($_SESSION['user_correcto'])) {
            echo '<p>'.$_SESSION['user_correcto'].'</p>';
            unset($_SESSION['user_correcto']);
        }

        $sql = "SELECT * FROM Usuarios";
        $resultado = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($resultado);

        if($filas == 0) {
            echo 'No hay ningún registro en la tabla de usuarios';
        }
    ?>

    <form action="#" method="post">
        <table>
            <tr>
                <th>Usuario</th>
                <th>Password</th>
            </tr>

            <?php
                while($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<tr>';
                    
                    echo '<td>'.$fila['user'].'</td>';
                    echo '<td>'.$fila['pass'].'</td>';
                    
                    echo '</tr>';
                }


            ?>
        </table>
    </form>

    <button><a href="Mostrar.php">Insertar datos</a></button>
</body>
</html>