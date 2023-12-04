<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administrador - Tenis App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .navbar {
      background-color: #28a745;
      color: white;
    }

    .container-fluid {
      padding: 20px;
    }

    .card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Tenis App - Panel de Administrador</a>
    <!-- Puedes agregar más elementos de navegación aquí -->
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Usuarios</h5>
            <p class="card-text">Número total de usuarios: 100</p>
            <a href="#" class="btn btn-primary">Gestionar Usuarios</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Productos</h5>
            <p class="card-text">Número total de productos: 50</p>
            <a href="#" class="btn btn-primary">Gestionar Productos</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pedidos</h5>
            <p class="card-text">Número total de pedidos: 30</p>
            <a href="#" class="btn btn-primary">Gestionar Pedidos</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
