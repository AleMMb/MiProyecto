<?php
include '../class/database.php';
include '../class/categorias.php';


$nombreCat = $_POST['Nombre_categoria']; //Obtiene datos desde el formulario.


$db = new Database();
$categoria = new Categoria($db->getConexion());


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Nombre_categoria'])) { //Me aseguro que traigo datos desde el form

    $nombreCat = $_POST['Nombre_categoria'];
    
    if (empty($nombreCat)) {
        die("El nombre de la categoría es obligatorio.");
    }
    
    $categoria->setNombreCategoria($nombreCat);
    $categoria->insertarCategoria();
}


if (isset($_GET['id'])) {  //Me aseguro de capturar el Id
    $id = $_GET['id'];

    if ($categoria->eliminarCategoria($id)) {
        echo "Categoría eliminada correctamente.";
    } else {
        echo "Error al eliminar la categoría.";
    }
}


$categorias = $categoria->obtenerTodasLasCategorias();
include './views/lista_categorias.php';
?>

