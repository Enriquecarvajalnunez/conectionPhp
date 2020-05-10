<?php
require_once 'Conection.php';
require_once 'PrintElements.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
</head>
<body>
<table border="1">
    <tr>
        <td>title</td>
        <td>description</td>
        <td>visible</td>
        <td>months</td>
        <td>updated_at</td>
        <td>created_at</td>
    </tr>

    <?php
    $sql="SELECT * from jobs";
    $result=mysqli_query(Conection(),$sql);

    PrintElements($result);  //Imprime los elementos de la BD 
    ?>

</table>

</body>
</html>