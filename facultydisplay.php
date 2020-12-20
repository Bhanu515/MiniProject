<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/studentdisplay.css">
    <title>Display data from DB</title>
    <style type="text/css">
    #cb{
      background-color: green; /* Green */
      border: none;
      color: white;
      padding: 10px 25px;
      border-radius: 15px;
      margin-left:40%;
      margin-top: 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
    #caneclbutton{
      background-color: green; /* Green */
      border: none;
      color: white;
      padding: 10px 25px;
      border-radius: 15px;
      margin-left:5%;
      margin-top: 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
    .table2,th,td{
      border: 2px solid red;
      background-color: #FFC;
      margin-top:25px;
      margin-left:34%;


    }
    .Rollno{
      margin-left:15%;
      margin-bottom:25px;

    }
    .zz{
      margin-top:-30px;
      //border:2px solid green;
      height:80%;
      width:50%;
      margin-left:25%;
    }
    .table1,th,td{
      margin-top: 15%;
      border: 1px solid green;
      background-color: #FFC;
      margin-top:25px;
      margin-left:25%;
      border-collapse: collapse;
    }
    .bb{
      margin-top:25px;
      margin-left:35%;
    }

    .news{

      align-content: center;
      border :2px solid green;

      column-count: 2;

      column-gap: 40px;
      column-rule: 3px double #ff00ff;
    }

    #B1{
      margin-top:10px;
      margin-left:10px;
      background-color:lightgreen;
      width: 16%;
      height: 20px;
    }
    #B2{
      margin-left:10px;
      background-color:lightgreen;
      width: 15%;
      height: 20px;
    }
    body
    {
      background-image: url('images/image1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
       background-size: cover;
    }


    </style>

  </head>

  <body>

    <h1 style="color:white">Faculty Display</h1>
    <div class="zz">


    <form action="checkstudent.php" method="post">
      <?php
      $link=mysqli_connect("localhost","System","password","miniproject");
      if(!$link)
      {
        die("Cannot Connected".mysqli_connect_error());
      }
      else {
        $result=mysqli_query($link,"select * from facultydetails where id='$id'");
        $r=mysqli_fetch_row($result);
        $FacultyName=$r[0];
        $FacultyID=$r[1];
        $Department=$r[2];
        $Subject=$r[3];
        $Subjectcode=$r[4];
        $phno=$r[5];
        $mail=$r[6];
        $section=$r[7];
        echo "<input name='section' value='$section' hidden/>";
        echo "  <input name='de' value='$Department' hidden/>";

        echo "<table class='table1'>";
        echo "<br>";
        echo "<tr><td>FacultyName</td><td>$FacultyName</td></tr>";
        echo "<tr><td>ID</td><td>$FacultyID</td></tr>";
        echo "<tr><td>Dept</td><td>$Department</td></tr>";
        echo "<tr><td>Subject</td><td>$Subject</td></tr>";
        echo "<tr><td>SubjectCode</td><td>$Subjectcode</td></tr>";
        echo "<tr><td>PhoneNumber</td><td>$phno</td></tr>";
        echo "<tr><td>MailID</td><td>$mail</td></tr>";
        echo "<tr><td>Section</td><td>$section</td></tr>";
        echo "</table>";

      }

      ?>
      <div class="Rollno">
      <b>Student :</b>
      <input type="text" placeholder="Rollno" name="rollno" required>
      <button type="submit" name="Marks" value="Edit" id="B1">Edit Marks</button>
      <button type="submit" name="Marks1" value="View" id="B2"> View Marks
      </button>
    </div>
      <?php


        $result=mysqli_query($link,"select name,id from studentdetails where branch='$Department' and section='$section'");

        echo "<div class='bb'><b>STUDENT DETAILS</b></div>";
        echo "<table class='table2'>";
        echo "<tr><th>Roll No</th><th>Name</th></tr>";
        while($r=mysqli_fetch_row($result))
        {
          echo "<tr><td>";
          echo $r[1];
          echo "</td><td>";
          echo $r[0];
          echo "</td></tr>";
        }
        echo "</table>";
        echo "<br>";
        ?>
        </form>

      <br>
        </div>
   <form action="back.php" method="post">
        <button type="submit"  name="Back" id="cb">
          Back</button>
      <a href="index.html" <button type="cancel" name="Cancel" id="caneclbutton">Logout</button>
      </a>
    </form>
  </body>
</html>
