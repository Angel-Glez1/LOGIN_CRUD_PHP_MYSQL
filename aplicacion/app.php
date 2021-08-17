<?php 


session_start();

if (isset($_SESSION['usuario'])){ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <h2 class="text-light ">Hola <?php echo $_SESSION['usuario']; ?></h2>
                <a href="cerra.php" class="navbar-brand">Cerrar sesion</a>
            </div>
        </nav> 

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">TAREA</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">EDITAR</th>
                        <th scope="col">ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        include_once '../registro/conexion.php';
                        $sql = "SELECT * FROM pdo"; 
                        $consulta = $conexion->prepare($sql);
                        $consulta->execute();
                        $resultado = $consulta->fetchALL();
                        foreach ($resultado as $key) { ?>
                        <tr>
                            <th scope="row"><?php echo $key['color']; ?></th>
                            <td><?php echo $key['descripcion']; ?></td>
                            <td><a class="float-right" href="editar.php?id=<?php echo $key['id'];?>"><i class="far fa-edit"></i></a></td>
                            <td><a class="float-right" href="eliminar.php?id=<?php echo $key['id'];?>"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        <div class="col-md-6">
            <h2 class="text-Center text-success" >INGRESA UNA TAREA</h2>
                <form action="insertar.php" method="post">
                    <input type="text" name="tarea" placeholder="Ingresa un nueva tarea " class="form-control mt-2">
                    <input type="text" name="des" placeholder="Ingresa la descripcion" class="form-control mt-2">
                    <input type="submit" name="boton" class="btn btn-primary mt-1" value="Agregar">    
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
    header("location: ../registro/index.php");
}
?>


