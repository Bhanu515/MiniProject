<?php
$Username=$_POST['name'];
$Branch=$_POST['branch'];
$section = $_POST["section"];
$phoneno = $_POST["phoneno"];
$collegeid = $_POST["collegeid"];
$parentname = $_POST["parentname"];
$parentphone=$_POST["parentphno"];
$parentmail = $_POST["parentmail"];
$studentmail=$collegeid."@mits.ac.in";
$pwd="Mits@1234";
$pwdp="Parent@1234";
$link=mysqli_connect("localhost","System","password","miniproject");

if(!$link)
{
  die("CannotConnect".mysqli_connect_error());
}
$Password="Reset1998";
//$result=mysqli_query($link,"select * from facultylogin");
$result=mysqli_query($link,"INSERT INTO studentlogin VALUES('$Branch','$studentmail','$Username','$pwd','$phoneno','$collegeid','$section')");
if(!$result)
{
  alert("StudentID / MailID already exist ");
}
else {
  $result=mysqli_query($link,"INSERT INTO studentdetails VALUES('$Username','$Branch','$section','$phoneno','$collegeid','$parentname','$parentphone','$parentmail','$studentmail')");
  $result2=mysqli_query($link,"INSERT INTO parentlogin VALUES('$parentmail','$parentname','$pwdp','$parentphone','$collegeid')");
  $result3=mysqli_query($link,"INSERT INTO parentdetails VALUES('$parentname','$parentmail','$Username','$collegeid')");

  if($Branch=='cse')
  {
    $result=mysqli_query($link,"INSERT INTO csemarks(ID) VALUES('$collegeid')");
  }
  else if($Branch=='ece')
  {
    $result=mysqli_query($link,"INSERT INTO ecemarks(ID) VALUES('$collegeid')");
  }



      if(!$result and !$result2 and !$result3)
      {
        alert("Error");
      }
      else {
        alert("successfully created");
      }

}

  function alert($msg)
  {

    include "Adminpage.html";
    echo"<script type='text/javascript'>alert('$msg');</script>";
  }







 ?>
