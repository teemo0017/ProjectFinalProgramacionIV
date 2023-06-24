<?php

$db = mysqli_connect('localhost:3306', 'root', 'root', 'appsalon');

if(!$db) {
    echo "Hubo un error";
    exit;
}