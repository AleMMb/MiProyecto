<?php /*Waleska Alejandra Mella Bonilla */ ?>

<?php

require_once 'database.php';

class Producto
{
    public $id;
    public $nombre;
    public $imagen;
    public $descripcion;
    public $precio;
    public $categoria;


    public function __construct($data)
    {
        $this->id = $data['id'] ?? null;
        $this->nombre = $data['name'];
        $this->imagen = $data['image'];
        $this->descripcion = $data['description'];
        $this->precio = $data['price'];
        $this->categoria = $data['category_id'];
    }


    public function crearProducto($data) {
        $db = new Database();
        
        // Crear un objeto Producto
        $producto = new Producto($data);

        // Insertar el producto en la base de datos
        $this->$db->insert('products', $producto);

        return true;
    }


}
?>








<?php
/*$cconexion = new Database();
$productos = $cconexion->selectAll('products');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
<pre>
    <?php print_r($productos);
    ?>
</pre>
    <h2>Productos desde PostgresSQL</h2>
    <div>
    <?php
    $imagen_url = $productos[0]['img']; echo '<img src="' . $imagen_url . '" alt="Imagen de Windows 11">'; ?>
    </div>
</body>
</html>*/