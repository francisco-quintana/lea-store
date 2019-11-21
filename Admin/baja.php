<?php
include("../var.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../images/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Alta</title>
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Alta de Producto</h3>
    <h4>Favor de llenarlo con los datos que se piden</h4>
    <fieldset>
      <input placeholder="Nombre del producto" type="text" tabindex="1" name="nombre"required autofocus>
    </fieldset>
    <fieldset>
      <textarea placeholder="Descripcion del producto" type="text" tabindex="2" name="desc" required></textarea>
    </fieldset>
    <fieldset>
      <input placeholder="Precio" type="number" tabindex="3" min="99" max="1999" name="precio"required>
    </fieldset>
    <fieldset>
    <textarea placeholder="Nombre de la Imagen en la Carpeta(800x800)" tabindex="4" type="text" name="img" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

include_once("baja2.php");

}

?>

</body>
</html>

