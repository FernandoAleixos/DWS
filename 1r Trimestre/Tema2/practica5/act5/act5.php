<?php
    /*5- Confeccionar un formulario que solicite la carga del nombre de usuario y su clave en dos oportunidades. 
    En la pagina que se procesan los datos del formulario implementar una función que imprima un mensaje 
    si las dos claves ingresadas son distintas.*/

    $nombre = @$_POST['nombre'];
    $clave1 = $_POST['contraseña1'];
    $clave2 = $_POST['contraseña2'];

    if(is_null($clave1) || is_null($clave2)) {
        echo 'Introduce un valor correcto';
    } else{
        if($clave1 == $clave2) {
            echo 'Las contraseñas coinciden';
        } else{
            echo 'Las contraseñas son distintas';
        }
    }

?>