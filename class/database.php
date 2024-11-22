<?php /*Waleska Alejandra Mella Bonilla */
?>

<?php

class Cconexion {
    function conectBD(){
        $host = "localhost";
        $user = "postgres";
        $pass = "woman2020";
        $dbName = "miproyecto";

        try{
            $conn = new PDO("pgsql:host=$host;dbname=$dbName", $user, $pass);
            echo "Se conectó correctamente a la Base de Datos.";
        } catch(PDOException $ex){
            echo ("Error al conectar a la Base de Datos: " . $ex->getMessage());
        }
        return $conn;
    }
}
?>

<?php

$cconexion = new Cconexion();


 $data = $cconexion->conectBD()->prepare("SELECT * FROM products");
 $data->execute();
 $result = $data->fetchAll(PDO::FETCH_ASSOC);
 echo "<pre>";
 print_r($result);
 echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php 
        $cconexion = new Cconexion();
        $cconexion->conectBD(); ?>
    <h2>Productos desde PostgresSQL</h2>
</body>
</html>