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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./build/css/style.css">
</head>
<body>
    <div class="contenedor-estetica">
        
        <div class="div_imagen">
            <img class="imagen" src="build/img/1.webp" alt="">
        </div>
        
        <div class="app">
            <header class="header">
                <h1>App Peluqueria</h1>
            </header>

            <div class="seccion">
                <h2>Servicios</h2>
                <p class="text-center">Elige tus Servicios a Continuación</p>
                <div id="servicios" class="listado-servicios">
                    <?php
                        while($servicio = mysqli_fetch_assoc($consulta)) { ?>
                        <a href="servicios.php?info=<?php echo $servicio['id']?>&servicio=<?php echo $servicio['nombre']?>" class="servicio">
                            
                            
                            <p class="nombre-servicio"><?php echo $servicio['nombre']; ?></p>
                            <p class="precio-servicio"><?php echo "$".$servicio['precio'].".00"; ?></p>
                        
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        

    </div>
</body>
</html>