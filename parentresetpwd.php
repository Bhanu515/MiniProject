<?php
$name=$_POST["name"];
$phone=$_POST["phone"];
$pwd1=$_POST["pwd1"];
$pwd2=$_POST["pwd2"];
if($name=="" or $phone=="")
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
  $result=mysqli_query($link,"select name from parentlogin where PHONE='$phone'");
  $r=mysqli_fetch_row($result);
  if(@$r[0]!=$name)
  {
    alert("Please check your details");
  }
  else
  {
        mysqli_query($link,"update parentlogin SET PASSWORD='$pwd1' WHERE PHONE='$phone' and NAME='$name'");
        include "index.html";
        alert("Password successfully changed");
  }
}
function alert($msg)
{
  include "parentresetpwd.html";
  echo"<script type='text/javascript'>alert('$msg');</script>";
}
 ?>
