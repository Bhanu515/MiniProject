<?php
$rollno=$_POST["rollno"];
$section=strtolower($_POST["section"]);
$department=$_POST["de"];
$link=mysqli_connect("localhost","System","password","miniproject");
$result=mysqli_query($link,"select name,id from studentdetails where section='$section' and branch='$department' and id='$rollno'");
$r=mysqli_fetch_row($result);
if(isset($r[0]))
{
    if(isset($_POST["Marks1"]))
    {
      include "viewStudentMarks.php";
      
    }
    if(isset($_POST["Marks"]))
    {
      include "studentMarks.php";

    }
}
else{

  alert("Invalid Rollno");

}
function alert($msg)
{
  echo"<script type='text/javascript'>alert('$msg');
  window.history.go(-1);
  </script>";
}
 ?>
