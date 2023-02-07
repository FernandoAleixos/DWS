<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Cuenta Bancaria</title>
</head>
<body>
<?php
    // Crear una clase CuentaBancaria que tenga los siguientes métodos:
    class CuentaBancaria {
        private $cuenta;

        function __construct() {
            $this -> cuenta = 0;
        }

        // Añade una cierta cantidad a nuestra cuenta
        public function hacerDeposito($cantidad) {
            $this -> cuenta += $cantidad;
        }

        // Retirar una cierta cantidad de la cuenta en caso de que haya suficiente dinero.
        public function hacerRetiro($cantidad) {
            if ($this -> cuenta >= $cantidad) {
                $this -> cuenta -= $cantidad;
            } else {
                echo '<div class="alert alert-warning">No tienes suficiente saldo para realizar esta operación!</div>';
            }
        }

        // Obtener el saldo total de la cuenta
        public function getBalance() {
            echo '<div class="alert alert-primary">Balance total de la cuenta: ' .$this -> cuenta. '€</div>';
        }
    }

    $usuario = new CuentaBancaria();
    $usuario -> hacerDeposito(1000);
    $usuario -> hacerRetiro(500);
    $usuario -> getBalance();
?>
</body>
</html>