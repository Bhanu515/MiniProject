<?php
$mail=$_POST["mail"];
$password=$_POST["password"];
if($mail=="" or $password=="")
{
  alert("Please enter Your Mail or Password");
}
else
{

$link=mysqli_connect("localhost","System","password","miniproject");

if(!$link)
{
  die("ConnectionError".mysqli_connect_error());
}
$result=mysqli_query($link,"select PASSWORD from admin where MAIL='$mail'");
$r=mysqli_fetch_row($result);
if(@$r[0]==$password)
{
    include "Adminpage.html";
}
else
{
  alert("Invalid details");
}

}

function alert($msg)
{

  // include "loginAdmin.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";

}



 ?>
