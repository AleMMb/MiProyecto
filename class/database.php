<?php /*Waleska Alejandra Mella Bonilla */?>

<?php
class Database {
    private $pdo;

    public function __construct() {
        // Datos de conexión a la base de datos
        $host = 'localhost';
        $dbname = 'miproyecto';
        $user = 'postgres';
        $password = 'woman2020';
        $dsn = "pgsql:host=$host;dbname=$dbname"; 

        try {
            $this->pdo = new PDO("$dsn", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    
    public function getConexion() {
        return $this->pdo;
    }
    /*// Método para ejecutar consultas
    public function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    // Método para obtener todos los registros de una tabla
    public function selectAll($table) {
        $stmt = $this->query("SELECT * FROM $table");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para insertar un registro
    public function insert($table, $data) {
        $keys = array_keys($data);
        $values = array_fill(0, count($keys), '?');
        $sql = "INSERT INTO $table (`" . implode('`,`', $keys) . "`) VALUES (" . implode(',', $values) . ")";
        $this->query($sql, array_values($data));
        return $this->pdo->lastInsertId();
    }

    //Método para modificar un registro de una tabla
    public function update($table, $data, $where) {
        $setClause = [];
        foreach ($data as $key => $value) {
            $setClause[] = "$key = ?";
        }
    
        $sql = "UPDATE $table SET " . implode(', ', $setClause) . " WHERE $where";
    
        $stmt = $this->pdo->prepare($sql);
        $params = array_values($data);
        $stmt->execute($params);
    }

    //Método para elimiar un registro de una tabla.
    public function delete($table, $where) {
        $sql = "DELETE FROM $table WHERE $where";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }*/
}

?>


