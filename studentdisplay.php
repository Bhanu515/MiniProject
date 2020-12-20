<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentdisplay.css">
    <title>Student Details</title>
    <style type="text/css">
    body
    {
      background-image: url('images/image1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
       background-size: cover;
    }
    table {
      border: 2px solid red;
      background-color: #FFC;
    }
    th {
      border-bottom: 5px solid #000;
    }
    td {
      border-bottom: 2px solid #666;
    }
    #caneclbutton{
    	background-color: green; /* Green */
      border: none;
      color: white;
      padding: 10px 25px;
    	border-radius: 15px;
    	margin-left:25%;
    	margin-top: 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
    .Result{
      font-size: 15px;
      margin-left: 25%;
    	margin-bottom:10px;
      flex-direction: row;
      border:double green 3px;
      height: auto;
      width: 50%;
      content: center;
    }
    </style>
  </head>
  <body>
    <h1>Student Details</h1>
    <div class="Result">


    <form action="viewStudentMarksforStudent.php" method="post">


      <?php
      $department=$r[1];
      $rollno=$r[0];
      $link=mysqli_connect("localhost","System","password","miniproject");
      if(!$link)
      {
         echo "Server not Respond".die(mysqli_connect_error());
      }
      $re2=mysqli_query($link,"select * from studentdetails where id='$rollno'");
     $z=mysqli_fetch_row($re2);
     if(!$z)
     {
       echo "error";
     }
      echo "<h4>Student name   <input id='u1'type='text' value=$z[0] readonly>
        <h4>Branch         <input id='id1' type='text' value=$z[1] readonly>
        <h4>Section        <input id='d1' type='text' value=$z[2] readonly>
        <h4>CollegeId      <input id='s1' type='CollegeId' value=$z[4] readonly>

        <h4>PhoneNumber    <input id='p1' type='phonenumber' value=$z[3] readonly>
        <h4>MailID     <input id='mID' type='MailID' value=$z[8] readonly>
        <br>";


          echo "<input name='department' value=$department hidden></input>";
           echo "<input name='rollno' value=$rollno hidden></input>";

          ?>
      <button type="submit"  name="Cancel" id="caneclbutton">Results</button>
      <a href="index.html" <button type="cancel" name="Cancel" id="caneclbutton">Logout</button>
      </a>
      <br>

        </form>
        </div>
  </body>
</html>
