<?php
    class Persona {
        protected $dni;
        protected $nombre;
        protected $edad;

        function __construct($dni, $nombre, $edad) {
            $this -> dni = $dni;
            $this -> nombre = $nombre;
            $this -> edad = $edad;
        }

        public function getDatosPersonales() {
            echo "<b>DNI:</b> ".$this -> dni."<br/>
                <b>Nombre:</b> ".$this -> nombre."<br/>
                <b>Edad:</b> ".$this -> edad."<br/>";
        }
    }

    class Cliente extends Persona {
        protected $creditos;

        function __construct($dni, $nombre, $edad, $creditos) {
            parent::__construct($dni, $nombre, $edad);
            $this -> creditos = $creditos;
        }

        function setCredito($cantidad) {
            $this -> creditos = $cantidad;
        }

        function getCredito() {
            echo "<b>Creditos del Cliente: </b>" . $this -> creditos . "<br/>";
        }
    }

    class Empleado extends Persona {
        protected $puesto;

        function __construct($dni, $nombre, $edad, $puesto) {
            parent::__construct($dni, $nombre, $edad);
            $this -> puesto = $puesto;
        }

        function setAsignarPuesto($asignacion) {
            $this -> puesto = $asignacion;
        }

        function getPuesto() {
            echo "<b>Puesto del Empleado: </b>" . $this -> puesto . "<br/>";
        }
    }

    $cli = new Cliente('12345678R', 'Juan', 33, 10);
    $cli -> getDatosPersonales();
    $cli -> getCredito();
    $cli -> setCredito('1000');  
    $cli -> getCredito();

    echo "--------------------------<br/>";

    $emp = new Empleado('12346642V', 'Pedro', 24, 'Recepcionista');
    $emp -> getDatosPersonales();
    $emp -> getPuesto();
    $emp -> setAsignarPuesto('Piloto');
    $emp -> getPuesto();
    
?>