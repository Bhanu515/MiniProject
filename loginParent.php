<?php
$mail=$_POST["mail"];
$password=$_POST["password"];
if($mail=="" or $password=="")
  alert("Please enter Your Mail or Password");
else
{

$link=mysqli_connect("localhost","System","password","miniproject");

if(!$link)
{
  die("ConnectionError".mysqli_connect_error());
}
$result=mysqli_query($link,"select * from parentlogin where (mail='$mail' or phone='$mail') and
                    PASSWORD='$password'");
$tt=mysqli_fetch_row($result);

if($tt)
{
   $re=mysqli_query($link,"select id,branch from studentdetails where id='$tt[4]'");
   $r=mysqli_fetch_row($re);
   
  include "studentdisplay.php";
}
else
  alert("Invalid details");

}

function alert($msg)
{

  // include "loginparent.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";

}



 ?>
