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
  $result=mysqli_query($link,"select * from facultylogin where MAIL='$mail' and PASSWORD='$password'");

  $r=mysqli_fetch_row($result);

  if(!$r)
  {
  alert("INVALID DETAILS");
  }
  else
  {
    $id=$r[4];
  include "facultydisplay.php";

  }
}

function alert($msg)
{

   //include "loginfaculty.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";

}



 ?>
