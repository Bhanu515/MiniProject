<?php
$mail=$_POST["mail"];
$phone=$_POST["phone"];
$pwd1=$_POST["pwd1"];
$pwd2=$_POST["pwd2"];
if($mail=="" or $phone=="")
{
  alert("Please enter your mail/number");
}
else if($pwd1=="" or $pwd2=="")
{
  alert("Please type your new password");
}
else if($pwd1!=$pwd2)
{
  alert("Both Passwords should be same");
}
else
{
$link=mysqli_connect("localhost","System","password","miniproject");
  if(!$link)
  {
  die("connection failure".mysqli_connect_error());
  }
  $result=mysqli_query($link,"select PHONE from facultylogin where MAIL='$mail'");
  $r=mysqli_fetch_row($result);
  if(@$r[0]!=$phone)
  {
    alert("Details does not exist");
  }
  else
  {
        mysqli_query($link,"update facultylogin SET PASSWORD='$pwd1' WHERE MAIL='$mail' and PHONE='$phone'");
        include "index.html";
        alert("Password successfully changed");
  }
}
function alert($msg)
{
  // include "facultyresetpwd.html"
  echo"<script type='text/javascript'>alert('$msg');</script>";
  window.history.go(-1);
}
 ?>
