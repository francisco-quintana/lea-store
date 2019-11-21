<?
session_start();
$f=$_REQUEST['la'];
$c=$_REQUEST['c'];
$das;
function a($f){
    for ($i = 0; $i < $_SESSION['index']; $i++)
            {
                if($f==$_SESSION['arr'][$i][0]){
                return true;
                }
            }
            return false;
}
function b($f){
    for ($i = 0; $i < $_SESSION['index']; $i++)
            {
                if($f==$_SESSION['arr'][$i][0]){
                return $i;
                }
            }
}
if($_SESSION['index']==0){
    $_SESSION['arr'][$_SESSION['index']][0]=$f;
    $_SESSION['arr'][$_SESSION['index']][1]=$c;
    $_SESSION['index']++;
    header("location:index.php");
}else{
    $z=a($f);
    $s=b($f);
    if($z==false){
        $_SESSION['arr'][$_SESSION['index']][0]=$f;
        $_SESSION['arr'][$_SESSION['index']][1]=$c;
        $_SESSION['index']++;
        header("location:index.php");
    }else{
        $_SESSION['arr'][$s][1]+=$c;
        header("location:index.php");
    } 
}
?>