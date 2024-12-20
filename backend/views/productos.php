<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!--my style sheet -->
    <link rel="stylesheet" href="/assets/css/estilos.css" />

    <meta name="author" content="Alejandra Mella" />
    <meta name="description" content="Productos" />

    <title>Productos</title>
</head>

<body>
    <div class="formulario">
        <h2>Agregar nuevo producto:</h2>
        <form id="nuevo_producto" action="/backend/productosController.php" method="post">
            <div class="mb-3"> <!-- selecion dinammica de categorias existentes -->
                <?php
                require 'C:\Users\fallx\OneDrive\Documentos\IPP\Bimestre 4\Programación web\Módulo 1\MiProyecto\class\database.php';
                $db = new Database();
                $pdo = $db->getConexion();

                $sql = "SELECT id, name FROM categories";
                $stmt = $pdo->query($sql);
                $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <label for="categorias" class="form-label">Seleccione una categoria:</label>
                <select id="categorias" class="form-select" name="SelCategoria" required>

                <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria['id']; ?>">
            <?php echo htmlspecialchars($categoria['name']); ?>
        </option> <?php endforeach; ?>

                </select>
            </div>

            <div class="mb-3">
                <label for="Nombre_producto" class="form-label">Nombre del producto:</label>
                <input type="text" class="form-control" id="Nombre_producto" name="NombreProducto" />
                <span id="error_nombre" class="error-message">Alejandra Mella Bonilla</span>
            </div>

            <div class="mb-3">
                <label for="Precio_producto" class="form-label">Precio:</label>
                <input type="number" class="form-control" id="Precio_producto" name="PrecioProducto" />
                <span id="error_precio" class="error-message">Por favor ingrese el precio del producto</span>
            </div>

            <div class="mb-3">
                <label for="Descripcion_producto" class="form-label">Descripción:</label>
                <textarea class="form-control" aria-label="With textarea" id="Descripcion_producto" name="DescripcionProducto"></textarea>
                <span id="error_descripcion" class="error-message">Alejandra Mella Bonilla.</span>
            </div>
            <label for="Img_producto" class="form-label">Imagen:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="Img_producto" name="ImgProducto" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <span id="error_imagen" class="error-message">El producto debe tener imagen</span>
            </div>

            <div class="buttons_holder">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button class="btn btn-secondary">Cancelar</button>
            </div>
            <div class="text-center">
                <h5 class="text-info center"> <small>Alejandra Mella Bonilla</small></h5>
            </div>

        </form>
    </div>


    <!-- JQuery 3.7.1 -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- js -->
    <script src="/assets/js/validaciones.js"></script>
</body>

</html>