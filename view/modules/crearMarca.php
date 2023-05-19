<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marca</title>
</head>
<body>
<form method="POST">
  <fieldset>
    <legend>Formulario para registrar una nueva marca</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Marca</label>
      <input type="text" name="marca" class="form-control" placeholder="Ingresa la marca" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </fieldset>
</form>
    <a href="index.php?route=marcas">
                <button>Ver marcas</button>
            </a>
    <?php 
    $run = NEW Controlador();
    $run -> createMarca();
    ?>
</body>
</html>