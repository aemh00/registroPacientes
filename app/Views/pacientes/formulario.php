<!-- formulario.php -->

<!-- HTML y Bootstrap para el diseño de la página -->
<!DOCTYPE html>
<html>

<head>
  <title>Formulario de Ingreso de Pacientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Formulario de Ingreso de Pacientes</h1>

    <!-- Formulario -->
    <form action="<?php echo base_url() ?>/envioForm" method="POST">
      <!-- RUT -->
      <div class="form-group">
        <label for="rut">RUT:</label>
        <input type="text" class="form-control" id="rut" name="rut" required>
        <small class="form-text text-muted">Ingrese el RUT con puntos y guión (ej. 12.345.678-9).</small>
      </div>

      <!-- Nombres -->
      <div class="form-group">
        <label for="nombres">Nombres:</label>
        <input type="text" class="form-control" id="nombres" name="nombres" required>
      </div>

      <!-- Apellido Paterno -->
      <div class="form-group">
        <label for="apellido_paterno">Apellido Paterno:</label>
        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
      </div>

      <!-- Apellido Materno -->
      <div class="form-group">
        <label for="apellido_materno">Apellido Materno:</label>
        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
      </div>

      <!-- Fecha de Nacimiento -->
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
      </div>

      <!-- Sexo -->
      <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-control" id="sexo" name="sexo" required>
          <option value="">Seleccionar</option>
          <option value="Masc.">Masculino</option>
          <option value="Fem.">Femenino</option>
          <option value="Indefinido">Indefinido</option>
          <option value="Desconocido">Desconocido</option>
        </select>
      </div>

      <!-- Nombre Social -->
      <div class="form-group">
        <label for="nombre_social">Nombre Social:</label>
        <input type="text" class="form-control" id="nombre_social" name="nombre_social" required>
      </div>

      <!-- Dirección -->
      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
      </div>

      <!-- Teléfono -->
      <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required>

      </div>

      <!-- Correo electrónico -->
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <small class="form-text text-muted">ej. alguien@mail.com</small>

      </div>

      <!-- Estado Civil -->
      <div class="form-group">
        <label for="estado_civil">Estado Civil:</label>
        <select class="form-control" id="estado_civil" name="estado_civil" required>
          <option value="">Seleccionar</option>
          <option value="Soltero">Soltero</option>
          <option value="Casado">Casado</option>
          <option value="Separado">Separado</option>
          <option value="Viudo">Viudo</option>
        </select>
      </div>

      <!-- País -->
      <div class="form-group">
        <label for="pais">País:</label>
        <input type="text" class="form-control" id="pais" name="pais" required>
      </div>

      <!-- Región -->
      <div class="form-group">
        <label for="region">Región:</label>
        <input type="text" class="form-control" id="region" name="region" required>
      </div>

      <!-- Comuna -->
      <div class="form-group">
        <label for="comuna">Comuna:</label>
        <input type="text" class="form-control" id="comuna" name="comuna" required>
      </div>

      <!-- Tipo de Residencia -->
      <div class="form-group">
        <label for="tipo_residencia">Tipo de Residencia:</label>
        <select class="form-control" id="tipo_residencia" name="tipo_residencia" required>
          <option value="">Seleccionar</option>
          <option value="Urbana">Urbana</option>
          <option value="Rural">Rural</option>
        </select>
      </div>

      <!-- Fotografía -->
      <div class="form-group">
        <label for="fotografia">Fotografía:</label>
        <input type="file" class="form-control-file" id="fotografia" name="fotografia">
      </div>

      <!-- Botón de envío -->
      <button type="submit" class="btn btn-primary">Guardar</button>

    </form>
    <div class="btn-group">
      <a href="<?= base_url() ?>" class="btn btn-primary">Volver</a>
    </div>
  </div>

</body>

</html>