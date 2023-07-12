<!-- registros.php -->

<!DOCTYPE html>
<html>
<head>
  <title>Registro de Pacientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Registro de Pacientes</h2>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>RUT</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha de Nacimiento</th>
            <!-- Agrega más columnas según los campos que deseas mostrar -->
          </tr>
        </thead>
        
      </table>
    </div>
    <a href="<?= base_url() ?>" class="btn btn-primary">Volver</a>
  </div>
</body>
</html>
