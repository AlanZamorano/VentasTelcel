<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotores</title>
</head>
<body>
<form method="POST">
  <fieldset>
    <legend>Formulario para registrar un nuevo promotor</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresa el nombre completo" autocomplete="off">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Numero</label>
      <input type="text" name="numero" id="numero" class="form-control" placeholder="Ingresa el número de celular" pattern="[0-9]+" maxlength="10" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </fieldset>
</form>
    <a href="index.php?route=promotores">
                <button>Ver promotores</button>
            </a>
    <?php 
    $run = NEW Controlador();
    $run -> createPromotor();
    ?>
</body>
</html>