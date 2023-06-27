<?php 
     $pagina = $_SESSION['pagina'];
    ?>
<header class="<?php echo($pagina==='mostrarcarrito.php')? 'header-sin-imagen':'header-imagen';?>">

    <nav class="barra-navegacion">
        <img src="build/img/logo.webp" width="75" height="75" alt="">

        <ul class="barra-opciones">
                <?php echo($pagina==='mostrarcarrito.php')? '<li><a href="./" class="botones-opciones">Inicio</a></li>':"";?>
            <li><a href="#" class="botones-opciones">Sobre Nosotros</a></li>
            <li class="nav-item dropdown">
                <a  class="botones-opciones " data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                <div class="dropdown-menu">
                    <?php while($servicio = mysqli_fetch_assoc($consulta2)) { ?>
                        
                        <a class="dropdown-item" href="infoservicios.php?nombre=<?php echo $servicio['nombre'];?>&id=<?php echo $servicio['id'];?>"><?php echo $servicio['nombre'] ?></a>
                        <div class="dropdown-divider"></div>
                        <?php }; ?>
                    </div>               
                </li>
                <li><a href="#" class="botones-opciones">Contacto</a></li>
            <li>
                <a class="botones-opciones" href="mostrarcarrito.php">
                <svg  class='icono-carrito'xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="2.5" stroke="#ffffff" fill="none" class="duration-300 transform transition-all" style="width: 48px; height: 48px;"><path d="M4.62 9.96h10.72l6.37 27.89h27.98l6.48-21.5-39.5-.56M51.73 44.35H21.67a3.21 3.21 0 01-3.28-3.28c0-3.22 3.32-3.22 3.32-3.22"></path><circle cx="24.95" cy="51.61" r="3.53"></circle><circle cx="46.04" cy="51.61" r="3.53"></circle></svg>
                <?php echo (!isset($_SESSION['CARRITO']))?'0':count($_SESSION['CARRITO']); ?>
                </a>

            </li>
        </ul>
    </nav>


</header>