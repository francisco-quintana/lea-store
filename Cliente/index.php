<?php
include("../var.php");
session_start();
$url="http://localhost/tienda/this.php/";
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
<div id="body">
<?php
for($i=0;$i<=count($array);$i++){
  if(($i==0 || ($i%2)==0) && $i!=count($array)){
    ?>
    <div class="square" id="left">
    <a href="window.php?f=<?echo ($i+1)?>"><img class="img" src="<? echo $array[$i][4]?>">
    <div class="overlay">
    <div class="text"><? echo $array[$i][1]?></div>
    </div>
    </a>
    </div>
  <?php
  }
  else if(($i%2)!=0 && $i!=count($array)){
  ?>
    <div class="square" id="right">
    <a href="window.php?f=<?echo (($array[$i][0]))?>"><img class="img" src="<? echo $array[$i][4]?>">
    <div class="overlay">
    <div class="text"><? echo $array[$i][1]?></div>
    </div>
    </a>
    </div>
<?php
  }
  else if($i==count($array)){
    ?>
    <div class="square" id="right2">
    </div>
<?php
  } 
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
</div> 
</body>
</html>