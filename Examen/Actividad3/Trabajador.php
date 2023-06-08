<?php

abstract class Trabajador {
    protected $nombre;
    protected $sueldo;

    function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function getSueldo() {
        return $this -> sueldo;
    }
}

class Empleado3 extends Trabajador {
    function __construct($nombre, $sueldo) {
        parent::__construct($nombre, $sueldo);
    }
}

class Gerente extends Trabajador {
    function __construct($nombre, $sueldo) {
        parent::__construct($nombre, $sueldo);
    }
}

$trabajadores = [];

$emp1 = new Empleado3('Manuel', 40);
$emp2 = new Empleado3('Federico', 50);
$emp3 = new Empleado3('Arnau', 60);

$ger1 = new Gerente('Alfredo', 100);
$ger2 = new Gerente('Pedro', 200);

array_push($trabajadores, $emp1, $emp2, $emp3, $ger1, $ger2);

$contEmp = 0;
$contGer = 0;

for ($i = 0; $i < count($trabajadores); $i++) {

    if ($trabajadores[$i] instanceof Empleado3) {
        $contEmp += $trabajadores[$i] -> getSueldo();
    
    } else if ($trabajadores[$i] instanceof Gerente) {
        $contGer += $trabajadores[$i] -> getSueldo();
    }
}

echo '<h3>Total sueldos Empleados: </h3>' .$contEmp. '€ <br>';
echo '<h3>Total sueldos Gerentes: </h3>' .$contGer. '€';

?>