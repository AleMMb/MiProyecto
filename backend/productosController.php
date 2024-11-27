<?php
/*Waleska Alejandra Mella Bonilla */ ?>

<?php
// Obtener los datos del formulario
$categoria = $_POST['SelCategoria'];
$nombre = $_POST['NombreProducto'];
$precio = $_POST['PrecioProducto'];
$descripcion = $_POST['DescripcionProducto'];
$imagen_url = $_POST['ImgProducto'];

var_dump($_POST);

// Crear un objeto (ejemplo básico)
class Producto {
    public $categoria;
    public $nombre;
    public $precio;
    public $descripcion;
    public $imagen_url;

    public function __construct($categoria, $nombre, $precio, $descripcion,$imagen_url) {
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->imagen_url = $imagen_url;
    }
}

// Crear una instancia del objeto
$producto = new Producto( $categoria, $nombre, $precio, $descripcion,$imagen_url);

// Imprimir los datos del objeto (para verificar)
echo "Nombre del producto: " . $producto->nombre . "<br>";
echo "Precio del producto: " . $producto->precio . "<br>";
echo "Descripción del producto: " . $producto->descripcion . "<br>";
echo "Imagen del producto: " . $producto->imagen_url . "<br>";
echo "La categoria:" . $producto->categoria;
?>

