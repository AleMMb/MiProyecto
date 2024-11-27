<?php /*Waleska Alejandra Mella Bonilla */

class Categoria{
    private $id_categoria;
    private $nombre_categoria;
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    public function getNombreCategoria() {
        return $this->nombre_categoria;
    }
    
    public function setNombreCategoria($nombre_categoria) {
        $this->nombre_categoria = $nombre_categoria;
    }

    public function insertarCategoria() {
        try {
            $sql = "INSERT INTO categories (name) VALUES (:nombre)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nombre', $this->nombre_categoria);
            $stmt->execute();

            echo "Categoría agregada exitosamente.";
        } catch (PDOException $e) {
            echo "Error al insertar categoría: " . $e->getMessage();
        }
    }

    public function obtenerTodasLasCategorias() {
        try {
            $sql = "SELECT * FROM categories"; 
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();  // Ejecuta la consulta
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
            return [];
        }
    }

}
?>