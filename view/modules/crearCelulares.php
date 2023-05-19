<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar celular</title>
</head>
<body>
  <div class="container-form">  
<form class="form" method="POST" autocomplete="off">

  <fieldset>
    <legend class="mb-3">Formulario para registrar un nuevo celular</legend>

    <div class="col-12">

    <div class="mb-3 col-2">
      <label for="disabledTextInput" class="form-label">SKU</label>
      <div class="col-11">
      <input type="text" name="pk_sku" class="form-control" pattern="[0-9]+" maxlength="6" minlength="6" autocomplete="off">
      </div>

      </div>

    <div class="mb-3 col-5">
    <label for="disabledTextInput" class="form-label">Compañía</label>
    
    <div class="col-11">
    <select name="telefonia" class="form-select" aria-label=".form-select-lg example"  required>
        <option selected>Selecciona una marca...</option>
        <option value="TELCEL">TELCEL</option>
        <option value="TELEFONIA LIBRE">TELFONÍA LIBRE</option>
        </select>
        </div>

        </div>

        <div class="mb-3 col-5">
    <label for="disabledTextInput" class="form-label">Marca</label>

    <div class="col-11">
    <select class="form-select" aria-label=".form-select-lg example" name="fk_marca" required>
        <option value="">Selecciona una marca...</option>
        <?php 
        $column = null;
        $val = null;
        $response = Controlador::marca($column, $val);
        foreach($response as $key => $value){
            echo '<option value="'.$value["pk_marca"].'">'.$value["marca"].'</option>';
        }
        ?>
        </select>
        </div>
        </div>
        </div>

        <div class="col-12">
    <div class="mb-3 col-6">
      <label for="disabledTextInput" class="form-label">Nombre</label>
      <div class="col-11">
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa el nombre del celular" required>
    </div>
    </div>

        <div class="mb-3 col-6">
    <label for="disabledTextInput" class="form-label">Color</label>

    <div class="col-11">
    <select class="form-select" aria-label=".form-select-lg example" name="fk_color" required>
        <option value="">Selecciona un color...</option>
        <?php 
        $column = null;
        $val = null;
        $response = Controlador::color($column, $val);
        foreach($response as $key => $value){
            echo '<option value="'.$value["pk_color"].'">'.$value["color"].'</option>';
        }
        ?>
        </select>
        </div>
        </div>
        </div>

        <div class="mb-3 col-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        
  </fieldset>
    </form>
    <div class="col-12">
        <a href="index.php?route=celulares">
    <button class="btn btn-success">Ver celulares</button>
    </a>
    </div>
    
    <?php 
    $run = NEW Controlador();
    $run -> createCelular();
    ?>

</div>
</body>
</html>