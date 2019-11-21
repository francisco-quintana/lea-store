<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="../images/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/form.css">
    <title>Baja</title>
</head>
<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Baja de Producto</h3>
    <h4>Esta eliminacion es permanente</h4>
    <fieldset>
      <input placeholder="ID del producto" type="text" tabindex="1" name="id"required autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
</div>
<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

include_once("alta2.php");

}

?>

</body>
</html>