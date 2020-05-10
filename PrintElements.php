<?php

function PrintElements($result){
    while($mostrar=mysqli_fetch_array($result)){               
    echo '<tr>';
    echo '<td>'.$mostrar['title']. '</td>';           
    echo '<td>'.$mostrar['description']. '</td>'; 
    echo '<td>'.$mostrar['visible']. '</td>'; 
    echo '<td>'.$mostrar['months']. '</td>'; 
    echo '<td>'.$mostrar['updated_at']. '</td>'; 
    echo '<td>'.$mostrar['created_at']. '</td>'; 
    echo '</tr>';
    } 
}