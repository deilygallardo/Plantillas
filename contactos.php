<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inversiones y Servicios Ydrogo</title>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/solar/bootstrap.min.css" rel="stylesheet">
	 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/pinterest.css">
   <link rel="stylesheet" href="css/detalles1.css">
   <link rel="stylesheet" href="css/maps.css">
	
	<link rel="icon" href="imagenes/imagen2.png" type="image/png">
</head>
<body>
    <!-- Inicio de menu -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="imagenes/logo1.png" style="width: 70%" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        PRODUCTOS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" target="_blank">ÚTILES ESCOLARES</a>
        <a class="dropdown-item" href="#" target="_blank">OBRAS LITERARIAS</a>
        <a class="dropdown-item" href="#" target="_blank">LIBROS INFANTILES</a>
        <a class="dropdown-item" href="#" target="_blank">JUGUETES</a>

      </div>
    </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        SERVICIOS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">FOTOCOPIADO</a>
        <a class="dropdown-item" href="#">ANILLADOS</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="contactos.php" target="_blank">CONTACTOS</a>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart"></i></a>
      </li>
    </ul>
  </div>
</nav>

  <!-- Fin de menu -->


<div class="container">
<center><div class="col-producto">
    <img style="width: 150px;" src="imagenes/logo1.png" class="rounded-circle"></div></center>

  <div class="row">
    <div class="col-md-5">
      <form action="recibir.php">
        <div class="form-group"><br>
         <div class="input-group">
           <span> Nombre completo:</span>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre"><br>
          <span></span>
          <input type="text" class="form-control" name="apellido" placeholder="Apellidos">
        </div>
        </div>
            <br>
        <div class="form-group">
          <label for="email">Email:</label>
            <input type="email" class="form-control"  placeholder="Ingrese email" name="email">
          </div>
        
        <div class="form-grup">
          <label for="detalles">Detalles:</label>
          <br>
          <textarea name="detalles" cols="50" rows="5"></textarea>
        </div>
        <br> 

        <div class="form-check">
          <label for="telefono" class="form-check-label">Gustaría ser contactado:
            <br>
          <input type="radio" name="opcionradio" class="form-check-input" value="SI">SI
          <br>
          <input type="radio" name="opcionradio" class="form-check-input" value="No">No
          </label>
        </div>
<br>
        <div class="form-group">
          <div class="input-group">
          <span>Telefono:</span>
          <input type="number" name="number" class="form-control" placeholder="###" >
          <span></span>
          <input type="number" name="number" class="form-control"  placeholder="###">
          <span></span>
          <input type="number" name="number" class="form-control"  placeholder="###">
          </div>
        </div>
        <br>
        <center><button type="submit" class="btn btn-group">
          Enviar Formulario de Consulta </button></center>
    <br>
      </form>
    </div>

  
    <div class="col-md-7">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.8655488188633!2d-76.97437491655279!3d-6.0315950994539635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b73b0482e1379b%3A0x21262976de937595!2sMifarma!5e0!3m2!1ses!2spe!4v1531146811697" width="700" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
    
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/pinterest_grid.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>