<?php
    $arrayProductos = [
        array('categoría' => 1, 'producto' => 'zapatos', 'precio' => 49.99),
        array('categoría' => 2, 'producto' => 'pantalones', 'precio' => 19.99),
        array('categoría' => 3, 'producto' => 'calcetines', 'precio' => 7.98),
        array('categoría' => 4, 'producto' => 'camisetas', 'precio' => 15)
    ];
    
    $i = 1;

    //Bucle que introduce los valores del arrayProductos en un array auxiliar, cogiendo la columna "precio"
    foreach($arrayProductos as $key => $row) {
        $aux[$key] = $row['precio'];
    }

    //Función que ordena el array de forma ascendente
    array_multisort($aux, SORT_ASC, $arrayProductos);

    //Bucle que muestra por pantalla los productos ordenados por el precio
    foreach($arrayProductos as $key => $row) {
        echo 'Producto '.$i.' -- categoría: ' .$row['categoría'].', '.$row['producto'].', '.$row['precio'].'<br/>';
        $i++;
    }
?>