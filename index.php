<link rel="stylesheet" href="publico/estilos.css">

<?php
require_once 'configuracion/conexion.php';
require_once 'controladores/productoControlador.php';

$controladorProducto = new productoControlador();

// Acciones GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $accion = $_GET['accion'] ?? '';

    switch ($accion) {
        case 'modalAdd':
            include './vistas/modaladdproducto.php';
            break;
        
        case 'modalActualizar':
            if (isset($_GET['id'])) {
                $controladorProducto->mostrarFormularioActualizarProducto($_GET['id']);
            }
            break;
        case 'eliminarProducto':
            if (isset($_GET['id'])) {
                $controladorProducto->eliminarProducto($_GET['id']);
            }
            break;
    }

    $controladorProducto->mostrarProductos();
}

// Acciones POST
elseif ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST['accion'] ?? '';

    switch ($accion) {
        case 'agregar_producto':
            $controladorProducto->agregarProducto();
            break;
        
        case 'actualizar_producto':
            $controladorProducto->actualizarProducto();
            break;
    }

    header("Location: index.php");
    exit();
}

// Redireccionamiento por defecto
else {
    header("Location: index.php");
    exit();
}
















?>