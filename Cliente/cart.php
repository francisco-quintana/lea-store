<? 
session_start();
if(isset($_POST['plus'])){

  $a=$_REQUEST['a']-12;
  $_SESSION['arr'][$a][1]++;
}
if(isset($_POST['minus'])){
  
  $a=$_REQUEST['a']-12;
  $_SESSION['arr'][$a][1]--;
}

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
    <link rel ="stylesheet" href = "css/table3.css">
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
<?
if($_SESSION['index']!=0){
  ?>  
<table>
<tr>
  <th>
  <th id="text">Nombre 
  <th id="text">Cantidad
  <th id="text">Precio
  <th id="text">Total
</tr>
<?
for($i=0;$i<$_SESSION['index'];$i++){
  
  $f=$_SESSION['arr'][$i][0];
  $c=$_SESSION['arr'][$i][1];
  $url="http://localhost/tienda/this2.php/?d=$f";
  $json = file_get_contents($url);
  $objeto = json_decode($json);
  $array = json_decode(json_encode($objeto),true);
  ?>
  <tr>
    <td id='this'><img id="ya" src="<?echo $array[0][4]?>"></td>
    <td id='this'><p id="text"><?echo $array[0][1]?></td>
    <td id='this'><p id="text"><?echo $c?></td>
    <td id='this'><p id="text">$<?echo $array[0][3]?></td>
    <td id='this'><p id="text">$<?echo ($c*$array[0][3])?></td>
    <td id='this'><form action="" method="post">
    <input type="hidden" value="<?echo $i+12?>" name="a">
    <button type="submit" name="plus">+</button>
    <?if($_SESSION['arr'][$i][1]!=1)
    {
    ?>
    <button type="submit" name="minus">-</button>
    <?
    }
    ?>
    </form>
    </td>
    <td id='this'><p id="text"><a id="del"href="delete.php?c=<?echo $i+12?>">Eliminar Producto</td>
  </tr>
<?
}
if(isset($_POST['plus'])){
  $a=$_POST['a'];
  header("location:cart.php?a=$a");
}
if(isset($_POST['minus'])){
  $a=$_POST['a'];
  header("location:cart.php?a=$a");
}
?> 
</table>
<?
}else{
  ?>
  <div id="emptiness">
    <p id="da">No hay nada en el carrito
  </div>
  <?
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