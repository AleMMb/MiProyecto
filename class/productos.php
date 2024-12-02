<?php /*Waleska Alejandra Mella Bonilla */ ?>

<?php

class Producto {
    private $id_producto;
    private $nombre_producto;
    private $imagen;
    private $descripcion;
    private $precio;
    private $categoria_id;
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function setNombre($nombre) {
        $this->nombre_producto = $nombre;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setCategoriaId($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    // Método para insertar un producto
    public function insertarProducto() {
        $sql = "INSERT INTO products (name, img, description, price, category_id) VALUES (:name, :img, :description, :price, :category_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $this->nombre_producto);
        $stmt->bindParam(':img', $this->imagen);
        $stmt->bindParam(':description', $this->descripcion);
        $stmt->bindParam(':price', $this->precio);
        $stmt->bindParam(':category_id', $this->categoria_id);

        return $stmt->execute();
    }

    // Trae todos los productos
    public function obtenerTodosLosProductos() {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // elimina un producto por id
    public function eliminarProducto($id) {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }


    public function obtenerTodosLosProductosMasCategoria(){
        $sql = "SELECT p.id, p.name, p.description, p.img, c.name AS categoria_nombre 
        FROM products p 
        INNER JOIN categories c ON p.category_id = c.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
?>