<?php
session_start();

if (isset($_POST['btn-compra'])) {


  switch ($_POST['btn-compra']) {

    case 'agregar':
      if (!isset($_SESSION['CARRITO'])) {
        $producto = array(
          'id' => $_POST['id'],
          'nombre' => $_POST['nombre'],
          'precio' => $_POST['precio'],
          'cantidad' => $_POST['cantidad']
        );
        
        $_SESSION['CARRITO'][1] = $producto;
      } else {
        $numeroProductos = count($_SESSION['CARRITO']);
        $producto = array(
          'id' => $_POST['id'],
          'nombre' => $_POST['nombre'],
          'precio' => $_POST['precio'],
          'cantidad' => $_POST['cantidad']
        );
        $_SESSION['CARRITO'][$numeroProductos + 1] = $producto;
      }
      break;
    case 'eliminar':
      foreach($_SESSION['CARRITO'] as $indice=>$valor){
        if($valor['id']==$_POST['id']){
          unset($_SESSION['CARRITO'][$indice]);
            echo '<script> alert("Articulo Eliminado");  </script>';
        }
      }
      break;
  }

  header("Location: " . $_SERVER['HTTP_REFERER'] . "");
}
