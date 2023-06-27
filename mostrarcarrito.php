<?php
session_start();
require __DIR__ . '/includes/funciones.php';
$_SESSION['pagina']='mostrarcarrito.php';
$consulta2 = obtener_servicios();
?>

<!-- Head -->
<?php include('./includes/commons/head.php') ?>
<!-- Header -->
<?php include('./includes/commons/header.php') ?>

<body class="">


<table class="table container  my-5">
  <thead class=" ">
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">precio</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <?php  for($i=1;$i<=count($_SESSION['CARRITO']);$i++){ ?>
    <tr>
      <td><?php echo $_SESSION['CARRITO'][$i]['nombre']?></td>
      <td><?php echo "$",$_SESSION['CARRITO'][$i]['precio'],".00"?></td>
      <td><?php echo $_SESSION['CARRITO'][$i]['cantidad']?></td>
    </tr>
<?php } ?>


  </tbody>
</table>





</body>

   <!-- FOOTER -->
   <?php include('./includes/commons/footer.php') ?>

</html>