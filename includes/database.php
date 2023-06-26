<?php

$db = mysqli_connect('localhost:3306', 'root', 'admin', 'appsalon');

if(!$db) {
    echo "Hubo un error";
    exit;
}