<?php 

session_start();
if (isset($_SESSION['usuario'])) {
    
    include_once '../registro/conexion.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM pdo WHERE id = (?)";
        $cons=$conexion->prepare($sql);
        $cons->execute(array($id));

        header("location:app.php");

    }else {
        header("location:app.php");
    }
}else {
    header("location:../registro/index.php");
}

?>