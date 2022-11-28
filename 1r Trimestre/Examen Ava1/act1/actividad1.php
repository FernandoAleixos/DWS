
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 1</title>
</head>
<body>
    <?php
        session_start();

        $combinacion = 1234;
        $numero = $_GET['numero'];

        for($i = 0; $i < 4; $i++) {
            if (is_numeric($numero)) {
                if ($combinacion == $numero) {
                    echo 'Esa es la combinación correcta.';
                    break;
                } else {
                    $_SESSION['incorrecta'] = 'Lo siento esa combinación es incorrecta.';
                    header('Location: form_act1.php');
                }
            } else {
                $_SESSION['error'] = 'El campo introducido debe ser un número.';
                header('Location: form_act1.php');
            }
        }
    ?>
</body>
</html>