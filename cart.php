<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['nombre'];
  $precio = $_POST['precio'];
  $id = $_POST['id'];
  
  echo $name;
  echo $precio;
  echo $id;
}
?>