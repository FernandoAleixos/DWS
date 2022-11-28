<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tabla</title>
</head>
<body>
    <?php
        session_start();
        include_once('db.php');
        $conectar = conexion();
        $sql = "SELECT * FROM Centro";

        $result = mysqli_query($conectar, $sql);
        $filas = mysqli_num_rows($result);

        if(isset($_SESSION['Insertado'])){
            echo '<p>'.$_SESSION['Insertado'].'</p>';
            unset($_SESSION['Insertado']);
        }

        if(isset($_SESSION['aula_insertada'])){
            echo '<p>'.$_SESSION['aula_insertada'].'</p>';
            unset($_SESSION['aula_insertada']);
        }

    ?>
    <button><a href="formulario.php">Añadir Centro</a></button>
    <button><a href="aula.php">Añadir Aula</a></button>
    
    <form action="formulario.php" method="post">
        
        <table>
            <tr>
                <th>Id</th>
                <th>Nombre Centro</th>
                <th>Ciudad</th>
                <th>Total Aulas</th>
            </tr>

            <?php
                while ($fila = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    
                    echo '<td>'.$fila['Id'].'</td>';
                    echo '<td>'.$fila['Nombre_Centro'].'</td>';
                    echo '<td>'.$fila['Ciudad'].'</td>';
                    echo '<td>'.$fila['Total_Aulas'].'</td>';
                    echo "<td><button><a href='mostrar_aula.php?idaula=".$fila['Id']."'>Mostrar Aula</a></button></td>";
                    
                    echo '</tr>';
                }
            ?>
        </table>
    </form>
</body>
</html>