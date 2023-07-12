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
<div class="container my-5 py-5 px-5">
    <h1 class="h1  mb-5 text-center">Formulario de contacto</h1>
<form class="row g-3 shadow-lg py-5 px-5" action="" method="post"> 
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Primer Nombre</label>
    <input type="text" class="form-control " id="validationServer01"  required>
  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Segundo Nombre</label>
    <input type="text" class="form-control " id="validationServer02" required>

  </div>
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Correo Electronico</label>
    <input type="email" class="form-control " id="validationServer02" required>

  </div>
  <div class="col-md-6">
    <label for="validationServer03" class="form-label">Ciudad</label>
    <input type="text" class="form-control " id="validationServer03" aria-describedby="validationServer03Feedback" required>

  </div>
  <div class="col-md-6">
    <label for="validationServer04" class="form-label">State</label>
    <select class="form-select " id="validationServer04" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option selected>Panama</option>
    </select>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>

</div>
<?php if($_SERVER['REQUEST_METHOD']=='POST'){ ?>
    <div class="alert alert-success container text-center" role="alert">
  Su informacion se mando con exito, estaremos en contacto con usted pronto!
</div>
<?php } ?>
<script src="./build/js/js.js"></script>
</body>

<?php include('./includes/commons/footer.php') ?>
