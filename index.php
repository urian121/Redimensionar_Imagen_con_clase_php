<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redimensionar Imagen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css" media="screen">
        h4{
            color: green;
        }
        h3{
            color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <span class="navbar-brand">
      <img src="imgs/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        Web Developer Urian Viera
  </span>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<br><br>
<br><br>

<div class="container text-center">
  <div class="starter-template">
    <p class="lead">
    Aca se presentan como poder cambiar de forma dinamica el tamaño de una imagen sin que la misma,
    <br>sea Recortada o pierda calidad, ejemplo se puede tener una imagen cuadrada de 300*300 etc..
        <br> solo basta ajustarlo a la necesidad del Cliente..</p>
  </div>

<hr>

  <div class="row">
   <div class="col-12">

    <section class="container" id="demo-content">
        <div>

    <form action="resize_crop.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="" class="btn btn-primary">

        <input type="submit" value="Enviar Imagen" class="btn btn-primary">
    </form>
    <?php
        if (isset($_GET['crop'])) {
            if ($_GET['crop'] == 'true') { ?>
                <br>
                <span id="exito">
                <h4>Se ha creado la imagen correctamente</h4>
                </span>
           <?php } else { ?>
                <h3>No se ha podido crear la imagen</h3>
           <?php }
        }
    ?>

    </div>
        <hr id="hrs">

    </section>
    </div>
  </div>

</div>

<script   src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
    setTimeout(function () {
        $("#exito").hide();
    }, 2000);
});
</script>
</body>
</html>
