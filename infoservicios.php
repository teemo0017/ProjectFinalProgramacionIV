<?php 
session_start();
require __DIR__ . '/includes/funciones.php';
$consulta2 = obtener_servicios();
 $_SESSION['pagina']='infoservicios.php';?>
<!-- Head -->
<?php include('./includes/commons/head.php') ?>
<!-- Header -->
<?php include('./includes/commons/header.php') ?>

<body>
    <div class="container my-5 py-5 px-5 shadow-lg">
       <h1 class="h1 text-center pb-5"><?php echo $_GET['nombre']?></h1>
        <img class="rounded mx-auto d-block"  height="500" width="500" src="./build/img/imgs/<?php echo $_GET['id']?>.jpg" alt="">
        
        <div class="my-5">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita recusandae at quis est? Praesentium placeat, tempore saepe vitae quis quae reprehenderit amet. Accusamus cum pariatur a laudantium itaque, perspiciatis officiis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vitae obcaecati minima illum eaque provident officiis beatae deleniti nemo dicta, quibusdam sit, corporis ipsam eligendi est, dignissimos ullam delectus iure.
        </div>
    </div>
    <script src="./build/js/js.js"></script>
</body>

<?php include('./includes/commons/footer.php') ?>
