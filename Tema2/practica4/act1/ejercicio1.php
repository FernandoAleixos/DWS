<?php
    $categoria = $_GET['categoria'];

    $arrayProductos = [
        array('categoría', 1, 'producto', 'zapatos'),
        array('categoría', 2, 'producto', 'pantalones'),
        array('categoría', 3, 'producto', 'camisetas'),
        array('categoría', 4, 'producto', 'calcetines')
    ];

    switch ($categoria) {
        case 0:
            echo 'Has elegido la ' .$arrayProductos[0][0]. ': ' .$arrayProductos[0][1]. ' con el ' .$arrayProductos[0][2]. ': ' .$arrayProductos[0][3];
            break;
        
        case 1:
            echo 'Has elegido la ' .$arrayProductos[1][0]. ': ' .$arrayProductos[1][1]. ' con el ' .$arrayProductos[1][2]. ': ' .$arrayProductos[1][3];
            break;
        
        case 2:
            echo 'Has elegido la ' .$arrayProductos[2][0]. ': ' .$arrayProductos[2][1]. ' con el ' .$arrayProductos[2][2]. ': ' .$arrayProductos[2][3];
            break;

        case 3:
            echo 'Has elegido la ' .$arrayProductos[3][0]. ': ' .$arrayProductos[3][1]. ' con el ' .$arrayProductos[3][2]. ': ' .$arrayProductos[3][3];
            break;
    }
?>