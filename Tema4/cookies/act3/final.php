<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>ValenBici</title>
</head>
<body>
    <header>
        <img id="inicio" src="./img/imagen-fondo.webp" alt="Imatge de biciclestes" width="100%" height="300px">
            <ul class="nav">
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="">VENTA</a></li>
                <li><a href="">ALQUILER</a></li>
                <li><a href="">TALLER</a></li>
                <li>
                    <label for="idioma">Idioma</label>
                    <select name="idioma">
                        <option value="es">Español</option>
                        <option value="ca">Catalá</option>
                    </select>
                </li>
                <button><a href="">Iniciar Sesión</a></button>
            </ul>
    </header>

    <section class="imgCentro">
        <img src="./img/ruta-carretera.jpg" alt="imatge">
    </section>

    <section>
        <div id="ofertas">
            <h2>OFERTAS</h2>
            <img src="./img/mas-vendido3.jpg" alt="imatge" class="imatges">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>

        <div id="mas_vendido">
            <h2>MÁS VENDIDO</h2>
            <img src="./img/bici-carretera.jpg" alt="imatge" class="imatges">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>

        <div id="nuevo">
            <h2>NUEVO</h2>
            <img src="./img/bicicleta-montaña.jpg" alt="imatge" class="imatges">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
        </div>
    </section>

    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7986.550325190919!2d-0.3625777763782133!3d39.48658322121273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd60461c52ac51ad%3A0xabe04f259b72a8a0!2sThe%20Fitzgerald%20Burger%20Company!5e0!3m2!1ses!2ses!4v1666975147681!5m2!1ses!2ses" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="mapa"></iframe>
        <div id="referencias">
            <p>Localidad: </p>
            <p>Direccion: </p>
        </div>
        
        <img src="./img/roda.png" alt="Logotipo" id="logo">
    </footer>
</body>
</html>