<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['lang'])) {
            if ($_COOKIE['lang'] == "es") {
                header('Location: espanyol.html');
            } else {
                header('Location: ingles.html');
            }
        }
    ?>
    <table align="center">
        <tr>
            <td align="center"><h2>Elige un idioma: </h2></td>
        </tr>
        <tr>
            <td align="center"><a href="cookie.php?idioma=es"><img src="Bandera_de_españa.png" alt="Bandera de españa" width="500" height="300"></td></a>
            <td align="center"><a href="cookie.php?idioma=en"><img src="Flag_of_the_United_Kingdom.svg" alt="Britain flag" width="500" height="300"></td></a>
        </tr>
    </table>
</body>
</html>