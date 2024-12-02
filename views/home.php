<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="../assets/img/rb_37906.png"/>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/estilos.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../views/home.php">
      <img src="../assets/img/rb_37906.png" alt="DeepLab" width="40" height="40">
    </a>
    <a class="navbar-brand">DeepLab</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../backend/productosController.php">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../backend/categoriasController.php">Categorías</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../backend/views/productos.php">Add Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../backend/views/categorias.html">Add Categoria</a>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-5">
  <h2>Nuestros productos:</h2>
  <div class="row">
      <?php error_reporting(E_ERROR | E_PARSE);
      require_once "../backend/productosController.php";
      foreach ($productosYCategoria as $articulo): ?>
          <div class="col-md-4">
              <div style="height: 600px;" class="card mb-4 border-info">
                  <img src="<?= htmlspecialchars($articulo['img']) ?>" class="card-img-top" alt="<?= htmlspecialchars($articulo['name']) ?>">
                  <div class="card-body">
                      <h5 class="card-title"><?= htmlspecialchars($articulo['name']) ?></h5>
                      <h5 class="card-subtitle mb-2 text-body-secondary"> Categoria: <?= htmlspecialchars($articulo['categoria_nombre']) ?></h5>
                      <p class="card-text"><b>Descripcion:</b> <?= htmlspecialchars($articulo['description']) ?></p>
                  </div>
              </div>
          </div>
      <?php endforeach; ?>
  </div>
</section>   
</body>
</html>