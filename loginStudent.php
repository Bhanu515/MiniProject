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
$result=mysqli_query($link,"select ROLLNO,Department from studentlogin where MAIL='$mail' and PASSWORD='$password'");
$r=mysqli_fetch_row($result);

if($r)
{
  $department=$r[1];
  $rollno=$r[0];
  include "studentdisplay.php";
}
else
{
  alert("Invalid details");
}

}

function alert($msg)
{

  // include "loginStudent.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";

}



 ?>
