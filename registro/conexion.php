<?php 
/* Significado de las variables
    $c:comando
    $u:usuario
    $c:contraseña
*/

$db = "mysql:host=localhost;dbname=proyecto";
$us = "root";
$pw = "";

try {
    $conexion = new PDO ($db,$us,$pw);
     //echo "si";
    } catch (\Throwable $th) {
    
 
}




?>