<!-- PÁGINA DONDE ESTA EL FORMULARIO DE REGISTRO -->

<?php 
    include_once('../config/config.php');
    include('usuario.php');

    if ( isset($_POST) && !empty($_POST) ){
        $p = new usuario();


        $save = $p->save($_POST);
        if ($save){
            $mensaje = '<div class="alert alert-success" > Sesión registrada </div>';
         }else{
            $mensaje = '<div class="alert alert-danger" > Error al registrar! </div>';
         }
    }

?> <!-- LENGUAJE PHP UNION CON BASE DE DATOS -->


<!-- INICIO DE LENGUAJE HTML -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title> INSCRIPCION </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">





        <link rel="stylesheet" href="../CSS/Inicio.css"> <!-- INCLUIR CSS A LA PAAGINA -->

</head>
    <body>

    <!-- BARRA DE NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg  navbar-black bg- navbar-black bg-gradient">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">
        <img src="../imagenes/imagen1.png" alt="" height="18px" width="80px"></a>
        <button class="navbar-toggler" type="button color black" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"> <img src="../imagenes/imagen20.png" alt="menu" height="25px" width="20px"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pruebasProyectivas.html">¿QUIENES SOMOS?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../usuario/add.php">TE APOYAMOS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <Section class="py-4 text-sm-center text-md-center text-lg-center text-xl-center"></Section>

    <!-- INCLUIR LOGO DE LA MARCA -->
  <a href="../index.html">
  <div style="text-align:center;" class="container-fluid">
    <img src="../imagenes/imagen1.png" alt="logo" width="181" class="img-fluid mx-auto py-5">
  </div>
  </a>

  <!-- TITULO Y DESCRIPCION -->
  <Section class=" primertexto">
    <div style="text-align:center" >
      <h1 class="display-4"> INSCRÍBETE </h1>
      <p class="py-3"> Únete a la comunidad de empleadores y colaboradores PSICOR vas a estar  constantemente actualizado en las novedades y <br> actualizaciones de los nuevos modelos de reclutamiento  y selección de personal.  Donde tu colaborador podrás <br> estar enterado de todos los nuevos procesos de selección y estar  preparado para afrontarlos cuando sea necesario. <br> Y tú reclutador vas a estar a la vanguardia de los nuevos procesos que hacen más eficaz y eficientes la contratación de personal..<!-- br (para dividir texto) -->
        </p>
        <br>
    </div>
  </Section>


  <!-- INICIO DE FORMULARIO DE REGISTRO -->
    <div class="container">
        <?php
        if(isset($mensaje)){
            echo $mensaje;
        }
        ?>
            <h2 class="text-center mb-2"> Registrar Sesión </h2>
               <br>
                  <form method="POST" enctype="multipart/form=data">
                     <div style="text-align:center;" class="row mb-2">
                       <input type="text" class="form-control mb-2" name="dni" placeholder="Cedula">
                       <input type="text" class="form-control mb-2" name="nombres" placeholder="Nombres">
                       <input type="text" class="form-control mb-2" name="apellidos" placeholder="Apellidos" >
                       <input type="text" class="form-control mb-2" name="email" placeholder="Email" >
                       <input type="text" class="form-control mb-2" name="profesion" placeholder="Profesión" >
                       <Section class=" primertexto">
                      </div>
                      <br>

    <!-- BOTON DE REGISTRO -->   
    
  
         <div style="text-align:center;" >
            <button style="background-color: blue;" class="btn btn-success text-aling-center "> REGISTRARSE </button>
          </div>
            
      
             </form>
     </div>

   <!-- SECCION ULTIMA -->
<br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
<br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
<br> <!-- CREAR ESPACIOS ENTRE LINEAS -->

<!-- TARJETA 1 -->
  <section class="seccion3">
    <div class="container">
      <div id="tips video">
        <iframe width="640" height="360" src="https://www.youtube.com/embed/ZAUq3lVxY0E" title="Tips para el desarrollo del perfil laboral" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<!-- TARJETA 2 -->

   <article class="texto">
          <h5 style="text-align: center;">Nuestro Canal de YouTube </h5>
            <p style="text-align: center;"> <img  src="../imagenes/imagen3.jpeg" alt="reclutamineto"  width="195px" height="190px">
               <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
           <strong> Escanea el código, conoce nuestro Canal de YouTube y mantente informado de las novedades en los procesos de selección.</strong>
            </p>
             </a>
       <div class="boton">
            <a href="../pruebasProyectivas.html">
              <div> <strong> CONÓCENOS </strong></div>
            </a>
         </div>
     </div>

    </article>
</section>
  <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
  <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
  <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
  <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->
  <br> <!-- CREAR ESPACIOS ENTRE LINEAS -->


  <!-- PIE DE PAGINA  -->
<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card-body">
            <br>
            <h5 class="card-title"> psicor.en.linea@gmail.com</h5>
            <br>
            <h5 class="card-title"> @Psicor</h5>
            <br>
          
            <h5 class="card-title"> PSICOR </h5>
          </div>
        </div>

        <!-- redes 2 -->

        <div class="col-md-4">
          <div class="card-body">
            <h5> <img src="../imagenes/imagen17.png" width="50px" height="50px" alt="instagram"></h5>
            <h5> <img src="../imagenes/imagen18.png" width="90px" height="85px" alt="facebook"> </h5>
            <h5><img src="../imagenes/imagen19.png" width="100px" height="50px" alt="linke"> </h5>
          </div>
        </div>

        <!-- redes 3 -->
        <div class="col-md-4">
          <div class="card-body">
            <h5 class="card-title"> Síguenos y enterate de lo nuevo en el reclutamiento de personal</h5>
            <br>
            <h5 class="card-title"> Tú procesos de selección efectivo</h5>
            <br>
            <h5 class="card-title"> Copyright © 2022</h5>
          </div>
        </div>


  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>
