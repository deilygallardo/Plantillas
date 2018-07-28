<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/maps.css">
  <link rel="stylesheet" href="css/slide.css">


</head>

<body>


<!-- Inicio del Formulario -->
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
        <center><button type="submit" class="btn btn-primary">
          Enviar Formulario de Consulta </button></center>
		<br>
      </form>
    </div>

  
    <div class="col-md-7">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.8655488188633!2d-76.97437491655279!3d-6.0315950994539635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b73b0482e1379b%3A0x21262976de937595!2sMifarma!5e0!3m2!1ses!2spe!4v1531146811697" width="700" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
 	</div>

</div>
</div>
<!-- Fin del Formulario -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>