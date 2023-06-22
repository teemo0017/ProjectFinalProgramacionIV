<?php
    if($_GET){
        $servicio = $_GET['info'];
        $nombre_servicio = $_GET['servicio'];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Salón de Belleza</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="build/css/servicios.css">
</head>
<body>
    <div class="contenedor-estetica">
    <header class="header">
                <h1>App Peluqueria</h1>
            </header>
        <div > <img class="imagenes" src="./build/img/imgs/<?php echo $servicio;?>.jpg" alt=""></div>
        <div class="app">
            <div class="seccion">
                <h2><?php echo $nombre_servicio;?></h2>
                
                <div id="servicios" class="listado-servicios">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos facere aut odit nostrum, et corrupti voluptatem, atque soluta similique voluptates illo consectetur. Eligendi sapiente nobis itaque laboriosam maiores nostrum necessitatibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti perspiciatis iste reiciendis animi excepturi omnis modi, ullam voluptatum rem neque velit tempore ipsa nam? Corrupti, eveniet recusandae. Laborum, labore nisi.
                </div>
            </div>  
        </div>
    </div>
</body>
</html>