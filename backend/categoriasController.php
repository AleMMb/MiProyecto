<?php
include 'C:\Users\fallx\OneDrive\Documentos\IPP\Bimestre 4\Programación web\Módulo 1\MiProyecto\class\database.php';
include 'C:\Users\fallx\OneDrive\Documentos\IPP\Bimestre 4\Programación web\Módulo 1\MiProyecto\class\categorias.php';



$nombreCat = $_POST['Nombre_categoria']; //Obtiene datos desde el formulario.


$db = new Database();
$categoria = new Categoria($db->getConexion());


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Nombre_categoria'])) {
    // Obtener el nombre de la categoría desde el formulario
    $nombreCat = $_POST['Nombre_categoria'];
    
    // Validar que el nombre de la categoría no esté vacío
    if (empty($nombreCat)) {
        die("El nombre de la categoría es obligatorio.");
    }

    // Establecer el nombre de la categoría y llamar al método para insertarla
    $categoria->setNombreCategoria($nombreCat);
    $categoria->insertarCategoria();
}


$categorias = $categoria->obtenerTodasLasCategorias();
include 'C:\Users\fallx\OneDrive\Documentos\IPP\Bimestre 4\Programación web\Módulo 1\MiProyecto\backend\views\lista_categorias.php';


?>

