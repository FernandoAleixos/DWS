<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    class Player {
        public $name;
        public $birthday;
        public $country;
        public $dorsal;
        public $position;
        public $goals;
        public $matches;
        public $minutes;
        public $yellowCard;
        public $redCard;

        // Constructor del jugador
        function __construct($name, $birthday, $country, $dorsal, $position) {
            $this -> name = $name;
            $this -> birthday = $birthday;
            $this -> country = $country;
            $this -> dorsal = $dorsal;
            $this -> position = $position;
            $this -> goals = 0;
            $this -> matches = 0;
            $this -> minutes = 0;
            $this -> yellowCard = 0;
            $this -> redCard = 0;
        }

        // Muestra la edad del jugador
        public function age() {
            $fechaActual = 2023;
            return $fechaActual - $this -> birthday;
        }

        // Marca un gol
        public function score(){
            $this -> goals += 1;
        }

        // Añade una tajeta
        public function addCard($color) {
            if($color == 0) {
                $this -> yellowCard += 1;
            } else if($color == 1) {
                $this -> redCard += 1;
            } else {
                echo 'Color de la tarjeta desconocido';
            }
        }

        // Minutos jugados
        public function playMinutes($min) {
            $this -> minutes += $min;
        }

        // Muestra la ficha del jugador
        public function render() {
            echo '<table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Birthday</th>
                <th scope="col">Country</th>
                <th scope="col">Dorsal</th>
                <th scope="col">Position</th>
                <th scope="col">Goals</th>
                <th scope="col">Matches</th>
                <th scope="col">Minutes</th>
                <th scope="col">Yellow Cards</th>
                <th scope="col">Red Cards</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">'.$this -> name.'</th>
                <td>'.$this -> birthday.'</td>
                <td>'.$this -> country.'</td>
                <td>'.$this -> dorsal.'</td>
                <td>'.$this -> position.'</td>
                <td>'.$this -> goals.'</td>
                <td>'.$this -> matches.'</td>
                <td>'.$this -> minutes.'</td>
                <td>'.$this -> yellowCard.'</td>
                <td>'.$this -> redCard.'</td>
              </tr>
            </tbody>
          </table>';
        }
    }

    $jugador = new Player('Paco', '1999', 'Alginet', 20, 'MD');
    $jugador -> age();
    $jugador -> score();
    $jugador -> addCard(0);
    $jugador -> addCard(1);
    $jugador -> addCard(1);
    $jugador -> playMinutes(10);
    $jugador -> render();
?>
</body>
</html>