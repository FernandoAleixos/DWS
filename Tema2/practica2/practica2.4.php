<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //4- Mostrar los divisores de un número aleatorio comprendido entre 1 y 100.
        $aleatorio = mt_rand(1, 100);
    
        /*
        $arr = array();
        
        for($i = 1; $i <= $aleatorio; $i++) {
            if($aleatorio % $i == 0) {
                array_push($arr, $i);
            }
        }
        print_r($arr);
        */

        for($i = 1; $i <= $aleatorio; $i++) {
            if($aleatorio % $i == 0) {
                echo "$i, ";
            }
        }
    ?>
</body>
</html>