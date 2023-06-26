<?php
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){

  if(isset($_SESSION['carrito'])){
    $carrito_mio = $_SESSION['carrito'];
    if(isset($_POST['titulo'])){
      $id= $_POST['id'];
      $nombre = $_POST['nombre'];
      $precio = $_POST['precio'];
      $cantidad = $_POST['cantidad'];
      $donde = -1;
      if($donde != -1){
        $cuanto = $carrito_mio[$donde]['cantidad'];
      }
    }

  }
  else{

    $id= $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
  
  
    //inyectando array con valores post.
    $carritoNuevo[] = array(
      'id'=>$id,
      "nombre"=>$nombre,
      "precio"=>$precio,
      "cantidad"=>$cantidad
    );
  
    $carritoNuevo[]=array(
      'id'=>$id,
      "nombre"=>'W',
      "precio"=>$precio,
      "cantidad"=>$cantidad
    );

    $carritoNuevo[]=array(
      'id'=>$id,
      "nombre"=>'S',
      "precio"=>$precio,
      "cantidad"=>$cantidad
    );
    
    echo "<pre>";
    var_dump($carritoNuevo);
    echo "</pre>";
  }

}else{
  echo 'estamos en no lo estamos';

}
?>