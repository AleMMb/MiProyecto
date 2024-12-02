<?php /*Waleska Alejandra Mella Bonilla*/ ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../views/home.php">
      <img src="/assets/img/rb_37906.png" alt="DeepLab Home" width="40" height="40">
    </a>
    <a class="navbar-brand" href="../views/home.php">DeepLab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/backend/productosController.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/backend/views/productos.php">Add Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/backend/views/categorias.html">Add Categoria</a>
      </ul>
    </div>
  </div>
</nav>
<?php
error_reporting(E_ERROR | E_PARSE);
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


