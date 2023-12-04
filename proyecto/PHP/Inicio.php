<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión - Tenis App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f0f0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    #logo {
      max-width: 200px;
      height: auto;
    }

    #login-form {
      margin-top: 20px;
      text-align: center;
    }

    #login-form input {
      margin: 5px;
    }

    #login-button {
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div id="logo">
    <img src="img/abi.png" alt="Logo" class="img-fluid">
  </div>

  <div id="login-form">
    <form action="procesar_login.php" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
      </div>
      <button type="submit" class="btn btn-success" id="login-button">Iniciar sesión</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
