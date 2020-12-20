<?php
$Username=$_POST['Username'];
$FacultyID=$_POST['FacultyID'];
$Department=$_POST["Department"];
$Subject=$_POST["Subject"];
$SubjectCode=$_POST["SubjectCode"];
$Phonenumber=$_POST["Phonenumber"];
$MailID=$_POST["MailId"];
 
//echo "$Username<br>$FacultyID<br>$Department<br>$Phonenumber<br>$MailID<br>";


$sec="";
$Section="";
  if(isset($_POST['sec']))
  {
    $sec=$_POST['sec'];
    //echo "fs";
    if($sec=="A")
    {
      $Section="CseA";
    }
    if($sec=="B")
    {
      $Section="CseB";
    }
    if($sec=="C")
    {
      $Section="CseC";
    }
    if($sec=="D")
    {
      $Section="CseD";
    }
  }
  $link=mysqli_connect("localhost","System","password","miniproject");

  if(!$link)
  {
    die("CannotConnect".mysqli_connect_error());
  }
  $Password="Reset1998";
  //$result=mysqli_query($link,"select * from facultylogin");
  $result=mysqli_query($link,"INSERT INTO facultylogin(MAIL,NAME,PASSWORD,PHONE,ID ) VALUES('$MailID','$Username','$Password','$Phonenumber','$FacultyID')");
  if(!$result)
  {
    alert("FacultyID / MailID already exist ");
  }
else {
        $result=mysqli_query($link,"INSERT INTO facultydetails VALUES('$Username','$FacultyID','$Department','$Subject','$SubjectCode','$Phonenumber','$MailID','$Section')");
        if(!$result)
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
