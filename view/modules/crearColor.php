<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color</title>
</head>
<body>
<form method="POST">
  <fieldset>
    <legend>Formulario para registrar un nuevo color</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Color</label>
      <input type="text" name="color" class="form-control" placeholder="Ingresa el color" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </fieldset>
</form>
    <a href="index.php?route=colores">
                <button>Ver colores</button>
            </a>
    <?php 
    $run = NEW Controlador();
    $run -> createColor();
    ?>
</body>
</html>