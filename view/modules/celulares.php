<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
</head>
<body>
    <table class="table animate__fadeInDown">
        <thead class="table-light">
            <tr>
                <th>SKU</th>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Compañía</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $column = null;
            $val = null;
             $response = Controlador::celulares($column, $val);
             foreach($response  as $value){
                echo '<tr>
             <td>'.$value["pk_sku"].'</td>';

             $column = "pk_marca";
             $val = $value["fk_marca"];

             $marca = Controlador::marca($column, $val);

             echo '<td>'.$marca["marca"].'</td>';

             echo '<td>'.$value["nombre"].'</td>';

             $column = "pk_color";
             $val = $value["fk_color"];

             $color = Controlador::color($column, $val);

             echo '<td>'.$color["color"].'</td>';

             echo '<td>'.$value["telefonia"].'</td>';

             echo '</tr>';

             }
                
            // 
            // <td>'.$value["pk_sku"].'</td>
            // <td>'.$value["marca"].'</td>
            // <td>'.$value["nombre"].'</td>
            // <td>'.$value["color"].'</td>
            // <td>'.$value["telefonia"].'</td>
            // </tr>';

                // <td>'.$value["pk_sku"].'</td>
                // echo $item["pk_sku"];
               
                // </tr>';
            ?>
        </tbody>
    </table>
</body>
</html>