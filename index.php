<?php
require __DIR__ . '/includes/funciones.php';
$consulta = obtener_servicios();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link rel="stylesheet" href="./build/css/style.css">

    <!--  Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;500&display=swap" rel="stylesheet">


</head>
<header>
    <nav class="barra-navegacion">
        <img src="build/img/logo.webp" width="75" height="75" alt="">

        <ul class="barra-opciones">
            
            <li><a href="#" class="botones-opciones">Contacto</a></li>
            <li><a href="#" class="botones-opciones">Servicios</a></li>
            <li><a href="#" class="botones-opciones">Login</a></li>
        </ul>
    </nav>
</header>

<body>

    
        <div class="app">
            <div class="title-seccion">
                <div class="line"></div>
                <h1 class="titulo">App Peluqueria</h1>
                <div class="line"></div>
            </div>


            <div class="seccion">
                <p class="text-center">Elige tus Servicios a Continuación</p>
                <div id="servicios" class="listado-servicios">

                    <?php

                    while ($servicio = mysqli_fetch_assoc($consulta)) { ?>
                        <div class="servicio">

                            <img class="imagen-servicio" src="./build/img/imgs/<?php echo $servicio['id']; ?>.jpg" alt="">
                            <div class="infomacion-servicios">
                                <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p>
                                <p class="precio-servicio"><?php echo "$" . $servicio['precio'] . ".00"; ?></p>
                                <p class="info-servicio">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, possimus iusto quis fuga optio ducimus fugit! Corporis dicta voluptatem, esse nihil numquam iure </p>
                                <a href="servicio.php?info=<?php echo $servicio['id'] ?>&servicio=<?php echo $servicio['nombre'] ?>" class="boton-servicio"> VER MAS </a>
                            </div>
                            
                        </div>




                       
                    <?php } ?>
                </div>
            </div>
        </div>

    


    <script src="./build/js/js.js"></script>
</body>

<footer>
Arodi Contreras © 2023 Reservados todos los derechos
</footer>

</html>