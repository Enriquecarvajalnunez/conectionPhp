<?php

function Conection()
{
    $user="php";
    $pass="laboratorio";
    $server="localhost";
    $db="cursophp";
    $con=mysqli_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysqli_error());
    $db_select=mysqli_select_db($con,$db);
    
    return $con;
}

?>