<?php
$tablename=$_POST['de'];
//echo $tablename;
if(isset($_POST["button1"]))
{


$rollno=$_POST["rollno"];
$s1m1=$_POST["s1m1"];
$s1m2=$_POST["s1m2"];
$s2m1=$_POST["s2m1"];
$s2m2=$_POST["kkk"];
$s3m1=$_POST["s3m1"];
$s3m2=$_POST["s3m2"];
$s4m1=$_POST["s4m1"];
$s4m2=$_POST["s4m2"];
$s5m1=$_POST["s5m1"];
$s5m2=$_POST["s5m2"];
$s6m1=$_POST["s6m1"];
$s6m2=$_POST["s6m2"];
$link=mysqli_connect("localhost","System","password","miniproject");
$query="UPDATE $tablename SET s1m1=$s1m1,s1m2=$s1m2,s2m1='$s2m1',s2m2='$s2m2',
s3m1='$s3m1',s3m2='$s3m2',s4m1='$s4m1',s4m2='$s4m2',s5m1='$s5m1',s5m2='$s5m2',
s6m1='$s6m1',s6m2='$s6m2' where ID='$rollno'";
$r=mysqli_query($link,$query);
alert("Success");
}
if(isset($_POST["button2"]))
{
  alert1("");
}

function alert($msg)
{

  // include "loginAdmin.html";
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-2);
  </script>";

}
function alert1($msg)
{

  // include "loginAdmin.html";
  echo"<script type='text/javascript'>;
  window.history.go(-2);
  </script>";

}
 ?>
