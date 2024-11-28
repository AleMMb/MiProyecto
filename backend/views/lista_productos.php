<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    
</head>
<body>
    <div class="div_listado">
    <h2>Listado de Productos</h2>

<?php if (isset($productos) && count($productos) > 0): ?>
    <table class="table table-striped" border="1">
        <thead>
            <tr class="table-primary">
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría ID</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['id']); ?></td>
                    <td><?php echo htmlspecialchars($producto['name']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($producto['img']); ?>" alt="<?php echo htmlspecialchars($producto['name']); ?>" width="100"></td>
                    <td><?php echo htmlspecialchars($producto['description']); ?></td>
                    <td><?php echo htmlspecialchars($producto['price']); ?></td>
                    <td><?php echo htmlspecialchars($producto['category_id']); ?></td>
                    <td>
                        <a href="productosController.php?id=<?php echo $producto['id']; ?>" onclick="return confirm('¿Eliminar este producto?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay productos registrados.</p>
<?php endif; ?>
<div class="text-center">
        <a href="/backend/views/productos.php"><button class="btn btn-primary">Agregar</button></a>
        <h5 class="text-info"> <small>Alejandra Mella Bonilla</small></h5>
    </div>
    </div>

</body>
</html>