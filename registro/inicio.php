<?php 

include("conexion.php");


if (isset($_POST['boton1'])) {
    if(!empty($_POST['usuario']) && !empty($_POST['password'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM registro WHERE usuario=(?)";
        $query = $conexion->prepare($sql);
        $query->execute(array($usuario));
        $resultado = $query->fetch();
        if($resultado){
            $p = $resultado['password'];
            if (password_verify($password,$p)) {
                  session_start();
                  $_SESSION['usuario'] = $usuario;
                  header("location: ../aplicacion/app.php");
            }else { ?>
                <script> alert("Las contraseñas no conhiciden");</script>
                <a href="index.php">Rectificar contraseñas</a>
          <?php  } 

        }else{ ?>
             <script> alert("Ups!! El nombre de usuario no conhicide, verifica que este bien escrito")</script> 
             <a href="index.php">Rectificar usuario</a>
        <?php }
    }else { ?>
        <script> alert("Favor de llenar todos campos");</script>
        <a href="index.php">Volver para completar el formulario</a>
    <?php }
}else{
        header("location:index.php");

}
?>