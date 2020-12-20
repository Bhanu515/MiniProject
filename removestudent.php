<?php
$name=$_POST["name"];
$id=$_POST["rollnumber"];
$link=mysqli_connect("localhost","System","password","miniproject");

if(!$link)
{
  die("CannotConnect".mysqli_connect_error());
}
$result=mysqli_query($link,"SELECT * FROM studentlogin where ROLLNO='$id' and name='$name'");
$r=mysqli_fetch_row($result);
if(!$r)
{
  alert("Student Rollno or Name does not EXIST");
}
else
{
  $result=mysqli_query($link,"DELETE FROM studentlogin  where ROLLNO = '$id' and name = '$name' ");
  $result=mysqli_query($link,"DELETE FROM studentdetails  where id = '$id' and name = '$name' ");
  $result=mysqli_query($link,"DELETE FROM parentdetails  where CHILDROLLNO = '$id'");
  $result=mysqli_query($link,"DELETE FROM parentlogin  where ID = '$id' ");
  $result=mysqli_query($link,"SELECT * from csemarks where ID='$id'");
  $r=mysqli_fetch_row($result);
  if($r[0]==$id)
  {
    $result=mysqli_query($link,"DELETE FROM csemarks where ID= '$id' ");
  }
  else {
    $result=mysqli_query($link,"DELETE FROM ecemarks where ID = '$id' ");
  }


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
