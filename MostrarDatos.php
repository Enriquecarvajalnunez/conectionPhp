<?php
require_once 'Conection.php';
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

    while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $mostrar['title']?></td>
        <td><?php echo $mostrar['description']?></td>
        <td><?php echo $mostrar['visible']?></td>
        <td><?php echo $mostrar['months']?></td>
        <td><?php echo $mostrar['updated_at']?></td>
        <td><?php echo $mostrar['created_at']?></td>
    </tr>

    <?php

    }

    ?>

</table>

</body>
</html>