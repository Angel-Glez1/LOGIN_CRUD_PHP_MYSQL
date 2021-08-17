<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Encabezado -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand">INICIO</a>
        </div>
    </nav> 

    <!-- Formulario de login -->
    <div class="container mt-6">
        <div class="row">
            <div class="col-md-6  mt-3" >
            <h1 class="mt-3 text-center">BIENVENIDO!!! INICIA SESION</h1>
                <form action="inicio.php" method="post" >
                    <input class="form-control mt-2" type="text" name="usuario" placeholder="Usuario" >
                    <input class="form-control mt-2" type="password" name="password" placeholder="Contraseña">
                    <input class="btn btn-primary mt-1" type="submit" name="boton1">
                </form>            
            </div>
        <!-- Formulario para registrase -->
        <div class="col-md-6  mt-3 ">
            <h1  class="mt-3 text-center">¿No tiene una cuenta? Registrate ahora</h1>
            <form action="registro.php" method="post">
                <input class="form-control mt-2"  type="text" name="n_usuario" placeholder="Nuevo Usuario" >
                <input class="form-control mt-2"  type="password" name="n_password" placeholder="Nueva Contraseña">
                <input class="form-control mt-2"  type="password" name="r_password" placeholder="Repita Contraseña">
                <input class="btn btn-primary mt-2"  type="submit" name="a">
            </form>             
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

