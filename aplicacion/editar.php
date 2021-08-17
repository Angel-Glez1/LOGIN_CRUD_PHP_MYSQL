<?php 
session_start();


if (isset($_SESSION['usuario'])) { 
  
    include_once '../registro/conexion.php';

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM pdo WHERE id = (?)";
    $query=$conexion->prepare($sql);
    $query->execute(array($id));
    $resultado = $query->fetch();

    $id =$resultado['id'];
    $color = $resultado['color'];
    $descripcion = $resultado['descripcion'];

    //var_dump($color);
    //var_dump($descripcion);
 }else {
     header("location:app.php");
 }

 if (isset($_POST['a'])) {
    $id = $_GET['id'];
    $ta = $_POST['tarea'];
    $desc = $_POST['des'];

    $s = "UPDATE pdo SET color = ?, descripcion = ? WHERE id = $id";
    $cn = $conexion->prepare($s);
    $cn->execute(array($ta,$desc));
    header("location:app.php");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
      <nav class="navbar navbar-dark bg-dark">
         <div class="container">
                <h2 class="text-light ">Hola <?php echo $_SESSION['usuario']; ?></h2>
                <a href="cerra.php" class="navbar-brand">Cerrar sesion</a>
            </div>
        </nav> 
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-danger">EDITE LOS CAMPOS DESEADOS</h4>
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post">
                <input type="text" name="tarea"  class="form-control mt-2" value=" <?php echo $color; ?>">
            <input type="text" name="des" class="form-control mt-2" value="<?php echo $descripcion;?> ">
                <input type="submit" name="a" class="btn btn-primary mt-1" value="Actualizar">    
                </form>            
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d86d5031f3.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>


 <?php }else {
    header("location:app.php");
} ?>