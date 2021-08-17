<?php 
session_start();
if (isset($_SESSION['usuario'])) {

    include_once '../registro/conexion.php';
     if (isset($_POST['boton'])) {
         $tarea = $_POST['tarea'];
         $des = $_POST['des'];


            $sql= "INSERT INTO pdo (color,descripcion) VALUES ('$tarea','$des')";
            $consulta =$conexion->prepare($sql);
            $consulta->execute();

            header("Location:app.php");
    }else {
        header("location:app.php");
    }


}else {
    header("location:../registro/index.php");
}
?>