<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Categorías</title>
    <!-- Bootstrap CSS 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/estilos.css">
</head>
<body>
<div class="div_listado">
    <h2>Listado de Categorías</h2>
    <?php if (isset($categorias) && count($categorias) > 0): ?>
        <table class="table table-striped" border="1">
            <thead>
                <tr class="table-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td scope="row"><?php echo htmlspecialchars($categoria['id']); ?></td>
                        <td scope="row"><?php echo htmlspecialchars($categoria['name']); ?></td>
                    </tr>
                     <!-- <td>
                        <a href="categoriasController.php?id= (se debe abrir >php) echo $categoria['id']; ?>
                        " onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                        <button class="btn btn-primary">eliminar</button>
                        </a>
                    </td> -->
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay categorías registradas.</p>
    <?php endif; ?>
    <div class="text-center">
        <a href="/backend/views/categorias.html"><button class="btn btn-primary">Agregar</button></a>
        <h5 class="text-info"> <small>Alejandra Mella Bonilla</small></h5>
    </div>
    </div>
    
</body>
</html>
