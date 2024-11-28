<?php /*Waleska Alejandra Mella Bonilla */ ?>

<?php
include '../class/database.php';
include '../class/productos.php';

$db = new Database();
$producto = new Producto($db->getConexion());

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['NombreProducto'];
    $imagen = $_POST['ImgProducto'];
    $descripcion = $_POST['DescripcionProducto'];
    $precio = $_POST['PrecioProducto'];
    $categoria_id = $_POST['SelCategoria'];

    if (!empty($nombre) && !empty($imagen) && !empty($precio) && !empty($categoria_id)) {
        $producto->setNombre($nombre);
        $producto->setImagen($imagen);
        $producto->setDescripcion($descripcion);
        $producto->setPrecio($precio);
        $producto->setCategoriaId($categoria_id);
        $producto->insertarProducto();
    } else {
        echo "Todos los campos obligatorios deben estar completos.";
    }
}

// Eliminar producto si se envía un ID por GET
if (isset($_GET['id'])) {
    $producto->eliminarProducto($_GET['id']);
}

// Obtener todos los productos
$productos = $producto->obtenerTodosLosProductos();
include './views/lista_productos.php';

?>

