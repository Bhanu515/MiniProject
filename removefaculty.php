<?php
$name=$_POST["name"];
$id=$_POST["id"];
$link=mysqli_connect("localhost","System","password","miniproject");

if(!$link)
{
  die("CannotConnect".mysqli_connect_error());
}
$result=mysqli_query($link,"SELECT * FROM facultylogin where id='$id' and name='$name'");
$r=mysqli_fetch_row($result);
if(!$r)
{
  alert("Faculty ID or Name does not EXIST");
}
else
{
  $result=mysqli_query($link,"DELETE FROM facultylogin  where id = '$id' and name = '$name' ");
  alert("Succefully Removed !!!");
}
//mysqli_close($link);
function alert($msg)
{

  //include "Adminpage.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";
}

 ?>
