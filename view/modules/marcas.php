<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
</head>
<body>
<table class="table">
  <thead class="table-light">
  <tr>
    <th>Marcas</th>
    </tr>
  </thead>
  <tbody>
  <?php 
     $colum = null;
         $val = null;
        $response = Controlador::marca($colum, $val);
            foreach($response as $value){
                echo'<tr>
                <td>'.$value["marca"].'</td>
                </tr>';
            }
            ?>
  </tbody>
</table>
    <table>
        <thead>
            
        </thead>
        <tbody>
            
        </tbody>
    </table>
</body>
</html>