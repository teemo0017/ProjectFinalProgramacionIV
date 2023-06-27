<?php
session_start();
require __DIR__ . '/includes/funciones.php';
$consulta = obtener_servicios();
$consulta2 = obtener_servicios();
$_SESSION['pagina']='index.php';
?>

<!-- Head -->
<?php include('./includes/commons/head.php') ?>
<!-- Header -->
<?php include('./includes/commons/header.php') ?>

<body>
    <!-- TITULO -->
    <div class="app">
        <div class="title-seccion">
            <div class="line"></div>
            <h1 class="titulo">App Peluqueria</h1>
            <div class="line"></div>
        </div>


        <!-- SERVICIOS -->
        <?php include('./includes/commons/servicios.php') ?>
    </div>

    <!-- JAVASCRIPT -->
    <script src="./build/js/js.js"></script>

</body>

   <!-- FOOTER -->
   <?php include('./includes/commons/footer.php') ?>

</html>

