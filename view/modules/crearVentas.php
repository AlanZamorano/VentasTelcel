<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
</head>
<body>
  <div class="container-form">  
    <form method="POST" class="form" autocomplete="off">

      <div class="col-12">

      <div class="mb-3 col-2">
      <label for="disabledTextInput" class="form-label">SKU</label>
      <div class="col-11">
      <input type="text" name="fk_sku" class="form-control" pattern="[0-9]+" maxlength="6" minlength="6" autocomplete="off" required>
      </div>
      </div>

  <fieldset disabled>
  <?php 
        $column = null;
        $val = null;
        $response = Controlador::celulares($column, $val);
        ?>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $response["pk_sku"]; ?>">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  
</form>

      <!-- </div>

      <div class="col-12">
      <div class="mb-3 col-3">
      <label for="disabledTextInput" class="form-label">Promotor</label>
      <div class="col-11">
      <select class="form-select" aria-label=".form-select-lg example" name="fk_promotor" required>
        <option value="">Selecciona promotor...</option>
        <?php 
        $column = null;
        $val = null;
        $response = Controlador::promotores($column, $val);
        foreach($response as $key => $value){
            echo '<option value="'.$value["pk_promotor"].'">'.$value["nombre"].'</option>';
        }
        ?>
        </select>
        </div>
        </div>

        <div class="mb-3 col-2">
      <label for="disabledTextInput" class="form-label">Factura</label>
      <div class="col-11">
      <input type="text" name="factura" class="form-control" pattern="[0-9]+" maxlength="6" minlength="6" autocomplete="off" required>
      </div>
      </div>

      <div class="mb-3 col-3">
      <label for="disabledTextInput" class="form-label">IMEI</label>
      <div class="col-11">
      <input type="text" name="imei" class="form-control" pattern="[0-9]+" maxlength="15" minlength="15" autocomplete="off" required>
      </div>
      </div>

      <div class="mb-3 col-4">
      <label for="disabledTextInput" class="form-label">ICCID</label>
      <div class="col-11">
      <input type="text" name="iccid" class="form-control" pattern="[0-9]+" maxlength="19" minlength="19" autocomplete="off" required>
      </div>
      </div>

      </div>
      
      <div class="col-12">
      <div class="mb-3 col-3">
      <label for="disabledTextInput" class="form-label">Factura de recarga</label>
      <div class="col-11">
      <input type="text" name="factura_re" class="form-control" pattern="[0-9]+" maxlength="6" minlength="6" autocomplete="off">
      </div>
      </div>

      <div class="mb-3 col-4">
      <label for="disabledTextInput" class="form-label">Recarga</label>
      <div class="col-11">
        <select name="recarga" class="form-select" aria-label=".form-select-lg example"  required>
        <option selected>Selecciona la cantidad...</option>
        <option value="50">$50.00</option>
        <option value="100">$100.00</option>
        <option value="0">Pendiente</option>
        </select>
        </div>
        </div>

        <div class="mb-3 col-2">
      <label for="disabledTextInput" class="form-label">Fecha</label>
      <div class="col-11">
      <input type="date" name="fecha" class="form-control">
      </div>
      </div>

      <div class="mb-3 col-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        </div>
        </form>  -->
      </div>
      
    
    <?php 
    $run = NEW Controlador();
    $run -> createVenta();
    ?>
</body>
</html>