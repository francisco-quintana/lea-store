<?php
session_start();
$f=$_REQUEST['f'];
$url="http://localhost/tienda/this2.php/?d=$f";
$json = file_get_contents($url);
$objeto = json_decode($json);
$array = json_decode(json_encode($objeto),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../images/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href = "css/style3.css">
    <link rel ="stylesheet" href = "css/specify.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cliente</title>
</head>
<body>
<div id="wrapper">
<div id="navbar">
<ul id="aa">
  <li id="cart"><a href="cart.php"><i class="fa fa-shopping-cart" id="cart-logo"></i></a></li>
  <li id="nav"><a id="logo2" href="index.php"><img id="logo"src="../images/lea.png"></a></li>
  <li id="exit"><a href="../index.php">EXIT</a></li>
</ul>
</div>
<div class="square" id="left">
    <img class="img" src="<? echo $array[0][4]?>">
</div>
<div class="square" id="right2">
  <div>
    <p id="name"><? echo $array[0][1]?></p>
  </div>
  <div>
    <p id="desc"><? echo $array[0][2]?></p>
  </div>
  <div>
    <p id="price">$<? echo $array[0][3]?></p>
  </div>
  <form action="" method="post">
  <div class="quan">
    <p class="can">Cantidad</p><input class="linea" type="number" name="numero" id="numero" min="1" max="20" required>
  </div>
  <div>
    <button id="button" type="submit" name="action"> Add to Cart</button>
  </div>
  </form>
</div>
<?
  if (isset($_POST['action'])){
    $c=$_POST['numero'];
    header("Location:add.php?la=$f&c=$c");
  }
  ?>
<div id="footer">
<div id="navbar">
<ul id="aa">
  <li id="center">Designed by Me</li>
</ul>
</div>
</div>
</div>
</body>
</html>