<?php
    $genero = @$_GET['genero'];

    if($genero == null) {
        echo 'Introduce un valor.';
    } else {
        print('Tu sexo es ' .$genero);
    }
?>