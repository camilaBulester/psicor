<?php
    include_once('../config/config.php');
    include('usuario.php');

    

        $p = new usuario();
        $dp = mysqli_fetch_object($p->getOne($_GET["id"]));


$update = $p->update($_POST);
        if ($update){
            $mensaje = '<div class="alert alert-success" role="alert" > Sesión modificada con exito. </div>';
         }else{
           
         }


?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> MODIFICAR SESION </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    <body>
    <?php include('../menu.php') ?>
    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>

   
    <h2 class="text-center mb-2"> Modificar Datos </h2>
            <form method="POST" enctype="multipart/form=data">

            <div class="row mb-2">
                 <input type="hidden" class="form-control mb-2" name="id" value="<?= $dp->id?>">
                 <input type="text" class="form-control mb-2" name="dni" placeholder="Dni" value="<?= $dp->dni?>">
                 <input type="text" class="form-control mb-2" name="nombres" placeholder="Nombres" value="<?= $dp->nombres?>">
                 <input type="text" class="form-control mb-2" name="apellidos" placeholder="Apellidos" value="<?= $dp->apellidos?>">
                 <input type="text" class="form-control mb-2" name="email" placeholder="Email" value="<?= $dp->email?>" >
                <input type="text" class="form-control mb-2" name="profesion" placeholder="Profesion" value="<?= $dp->profesion?>">
                <input type="submit" class="btn btn-primary">
                                

            </form>
</div>
            
</body>
</html>