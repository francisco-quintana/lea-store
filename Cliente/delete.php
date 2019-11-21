<?
session_start();
$d=$_REQUEST['c']-12;
for($i=$d;$i<$_SESSION['index'];$i++){

    $_SESSION['arr'][$i][0]=$_SESSION['arr'][$i+1][0];
    $_SESSION['arr'][$i][1]=$_SESSION['arr'][$i+1][1];
}
$_SESSION['index']--;
header("location:cart.php");

