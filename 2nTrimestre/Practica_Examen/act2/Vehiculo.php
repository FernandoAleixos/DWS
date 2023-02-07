<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Vehículo</title>
</head>
<body>
  <?php
    class Vehiculo {
      protected $color;
      protected $peso;

      function __construct($color, $peso) {
        $this -> color = $color;
        $this -> peso = $peso;
      }

      function circula() {
        echo 'El vehículo circula correctamente';
      }

      // Modifica el peso del vehículo en función del peso de la persona
      function anyadirPersona($pesoPersona) {
        $this -> peso += $pesoPersona;
      }
    }

    class CuatroRuedas extends Vehiculo {
      protected $numeroPuertas;

      function __construct($color, $peso, $numeroPuertas) {
        parent::__construct($color, $peso);
        $this -> numeroPuertas = $numeroPuertas;
      }

      // Cambia el color del coche
      function repintar($color) {
        $this -> color = $color;
      }
    }

    class Coche extends CuatroRuedas {
      private $numCadenasNieve;

      function __construct($color, $peso, $numeroPuertas) {
        parent::__construct($color, $peso, $numeroPuertas);
        $this -> numCadenasNieve = 0;
      }

      // Se añaden un número de cadenas de nieve especificadas
      function anyadirCadenas($num) {
        if ($this -> numCadenasNieve <= 4 && $num <= 4) {
          $this -> numCadenasNieve += $num;
        } else {
          echo '<div class="alert alert-warning">Has puesto demasiadas cadenas</div>';
        } 
      }

      // Se quitan un número de cadenas de nieve especificadas
      function quitarCadenas($num) {
        if ($this -> numCadenasNieve >= $num) {
          $this -> numCadenasNieve -= $num;
        } else {
          echo '<div class="alert alert-warning">Has quitado demasiadas cadenas</div>';
        }
      }
    }

    $coche = new Coche('azul', 1000, 4);
    $coche -> circula();
    $coche -> anyadirPersona(100);
    $coche -> repintar('naranja');
    $coche -> anyadirCadenas(4);
    $coche -> quitarCadenas(1);
  ?>
</body>
</html>