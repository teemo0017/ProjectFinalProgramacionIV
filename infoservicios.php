<?php 
session_start();
require __DIR__ . '/includes/funciones.php';
$consulta2 = obtener_servicios();
 $_SESSION['pagina']='infoservicios.php';?>
<!-- Head -->
<?php include('./includes/commons/head.php') ?>
<!-- Header -->
<?php include('./includes/commons/header.php') ?>




