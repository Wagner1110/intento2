<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventario</title>
        <!-- Favicon-->
       
        <!-- Font Awesome icons (free version)-->
        <script src="" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
  <!-- Begin Page Content -->
  <div class="container-fluid">
                <form method="POST" action="registrar.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de Producto</label>
    <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Marca</label>
    <input type="text" class="form-control" name="apellido" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
    </div>
     
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Costo</label>
    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tienda</label>
    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
     </div>

     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Proveedor</label>
    <input type="text" class="form-control" name="telefono" aria-describedby="emailHelp">
    
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                          