<?php
session_start();
require __DIR__ . '/includes/funciones.php';
$_SESSION['pagina'] = 'mostrarcarrito.php';
$consulta2 = obtener_servicios();
?>

<!-- Head -->
<?php include('./includes/commons/head.php') ?>
<!-- Header -->
<?php include('./includes/commons/header.php') ?>

<body >
    
  <div class="h1 container mt-5">Mi carrito</div>
  <?php if(isset($_SESSION['CARRITO']) && count($_SESSION['CARRITO'])>= 1){?>
  <table class=" table table-bordered container shadow-lg py-5 px-5 ">
    <thead class=" ">
      <tr class="text-center">
        <th width='40%' scope="col">Producto</th>
        <th  width='15%' scope="col">precio</th>
        <th  width='20%' scope="col">Cantidad</th>
        <th  width='20%' scope="col">Total</th>
        <th  width='5%' scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0;
       foreach($_SESSION['CARRITO'] as $indice=>$producto) { ?>
        <tr>
          <td  width='40%'><?php echo $producto['nombre'] ?></td>
          <td class="text-center" width='15%'><?php echo "$", number_format($producto['precio'],2) ?></td>
          <td class="text-center" width='20%'><?php echo $producto['cantidad'] ?></td>
          <td class="text-center" width='20%'><?php echo "$", number_format($producto['precio']*$producto['cantidad'],2)?></td>
          <form action="./cart.php"  method="post">

            <td class="text-center" width='5%'>
              <button type="submit" name="btn-compra" value="eliminar" class="btn btn-danger">ELIMINAR</button></td>

              <input name="id" type="hidden" value="<?php echo $producto['id']?> ">
          </form>
        </tr>
        
      <?php
      $total = $total+($producto['precio']*$producto['cantidad']);
     } ?>
      <tr>
        <td colspan="3" align="right" ><h3>Total</h3></td>
        <td align="right" ><h3><?php echo number_format($total,2); ?></h3></td>
       
      </tr>
    </tbody>
  </table>
<?php }else { ?>

<div class="container">
    <div class="alert alert-success" > No tienes ningun producto en tu carrito :(</div>
</div>
<?php } ?>
  <script src="./build/js/js.js"></script>
</body>

<!-- FOOTER -->
<?php include('./includes/commons/footer.php') ?>


</html>