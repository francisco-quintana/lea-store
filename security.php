<?php
include ("var.php");
include("conn.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
    
    $username = stripslashes($username);
    $password = stripslashes($password);
    $myusername = mysqli_real_escape_string($conn,$_POST['matricula']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
   
   $sql = "SELECT * from cliente where nombre='$myusername' and AES_DECRYPT(passwd,'$ps')='$mypassword'";
   $sql2 = "SELECT * from admi where nombre='$myusername' and AES_DECRYPT(passwd,'$ps')='$mypassword'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   $data = mysqli_fetch_assoc($result);
   $result2 = mysqli_query($conn,$sql2);
   $count2 = mysqli_num_rows($result2);
   $data2 = mysqli_fetch_assoc($result2);
   $arr=array();
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
      $_SESSION['sal'] = $data["saldo"];
      $_SESSION['arr'] = $arr;
      $_SESSION['index'] = count($arr);
      $_SESSION['id'] = $data["id_usuarios"];
            header("location: Cliente/index.php");
   }else if($count2 == 1) {
      $_SESSION['id'] = $data2["id_usuarios"];
            header("location: Admin/index.php");
      }else{
    $_SESSION['errors'] = array("Your username or password was incorrect.");
      header("location: index.php?msg=failed");
   }
   
 }
?>