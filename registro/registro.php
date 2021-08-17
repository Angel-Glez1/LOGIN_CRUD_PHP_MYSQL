<?php 

include("conexion.php");

//Validacion del boton & que los campos no estes vacios 
if (isset($_POST['a'])) {
    if(!empty($_POST['n_usuario']) && !empty($_POST['n_password']) && !empty($_POST['n_password'])){
        $n_usuario = $_POST['n_usuario'];
        $n_password = $_POST['n_password'];
        $r_password = $_POST['r_password'];
        
        // Incriptar la contraseña antes de ser guardada en la base de datos
        $n_password = password_hash($n_password, PASSWORD_DEFAULT);

        /**Verificas con un SELECT que en la datebase no exita el nombre de usuario que esta ingresando el usuario nuevo */
        $a = "SELECT * FROM registro WHERE usuario = (?)";
        $b = $conexion->prepare($a);
        $b->execute(array($n_usuario));
        $resultado = $b->fetch();

        /**Si la consulta salio true mandamos una alerta y cerramos la aplicacion para que no no se ejecute ningun codigo despues de la consulta */
        if($resultado){ ?>
            <script> alert("El usuario ya existe");</script> 
            <a href="index.php">Volver para escribir otro usuario</a>
            <?php 
            die();
        }

        /**Si la query fue falsa osea que no encontro ningun usuario ya registrado en la datebase con el mismo nombre que el puso prosigre a verificar contraseñas y a insertar los datos del nuevo usuario la datebase y inicia secion y lo redirecionamos a la app */
        if(password_verify($r_password,$n_password)){
            $sql = "INSERT INTO registro(usuario,password) VALUES (?, ?)";
            $consulta = $conexion->prepare($sql);
            if($consulta->execute(array($n_usuario,$n_password))) {
                session_start();
                $_SESSION['usuario'] = $n_usuario;
                header("location: ../aplicacion/app.php");
            }else {
                echo "error";
            }
       }  
    }else { ?>
        <script> alert("Favor de llenar todos campos");</script>
        <a href="index.php">Volver para completar el formulario</a>
<?php 
    }
}else {
    header("location:index.php");
}    


?>





































