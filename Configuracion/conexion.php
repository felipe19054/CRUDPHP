<?php

// Asignacion de variables
$dsn = 'mysql:host=localhost;port=3306;dbname=luz';
$username = 'root';
$password = '';

try {
    
    $conexion = new PDO($dsn, $username, $password);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexion exitosa";

} catch (\PDOException $e) {
    echo "Error de conexion en el BD ".$e->getMessage();
    die();
}












?>