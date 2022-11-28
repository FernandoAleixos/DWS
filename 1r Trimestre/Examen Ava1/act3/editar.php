<?php
    include_once('db.php');
    
    $conectar = conexion();
    $sql = "SELECT * FROM Trabajador";

    $resultado = mysqli_query($conectar, $sql);

    $filas = mysqli_num_rows($resultado);

    $squl = "update Ropa set Marca ='".$marca."', Color = '".$color."', Talla = '".$talla."', 
            Preu = ".$preu;
    
?>