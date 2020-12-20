<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body
    {
      background-image: url('images/image1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
       background-size: cover;
    }
    #cb{
      background-color: green; /* Green */
      border: none;
      color: white;
      padding: 10px 25px;
      border-radius: 15px;
      margin-left:39%;
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
      margin-left:10%;
      margin-top: 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
    }
    table,th {
  border: 1px solid black;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  border-collapse: collapse;
  }
  td{
    border: 1px solid black;
    margin-left: 20px;

  }
  input{
    /* position: absolute; */
    padding-left: 15px;
    max-width:2;
    width: 18%;
    background-color:inherit;
    font-weight: 200;
  }
  h2{
    margin-left: 40%;
  }

    </style>
  </head>
  <body>
















    <?php


     $department=$_POST['department'];
     $deptable=$department."marks";
     $rollno=$_POST['rollno'];

     $link=mysqli_connect("localhost","System","password","miniproject");
     $result=mysqli_query($link,"select SubjectName from $department");
     $res2=mysqli_query($link,"select * from $deptable where Id='$rollno'");
     $t=mysqli_fetch_row($res2);
     ?>
<form action="back.php" method="post">

<?php
    echo "<h2>".strtoupper($rollno)." Mid Exam : 1</h2>";
    $r=mysqli_fetch_row($result);
echo "<input name='rollno' value='$rollno' hidden/>";
echo "<input name='de' value='$deptable' hidden/>";
    echo '<br><table style="width:50%">
  <tr>
    <th>SubjectName</th>
    <th>Max Marks</th>
    <th>Obtained Marks</th>
    <th>Percentage</th>
  </tr>
  <tr><td>';
$p=round($t[1]*100/30);
  echo $r[0]."</td><td> 30</td>
    <td>  <input type='number' name='s1m1' value=$t[1] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>


  </tr>
  <tr>
    <td>";
$r=mysqli_fetch_row($result);
$p=round($t[2]*100/30);
  echo $r[0]."</td>
  <td>30</td>
  <td>  <input type='number' name='s1m1' value=$t[2] readonly> </td>
  <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
</tr>
<tr>
  <td>";
    $r=mysqli_fetch_row($result);
    $p=round($t[3]*100/30);
    echo $r[0]."</td>
    <td>30</td>
    <td>  <input type='number' name='s1m1' value=$t[3] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    $p=round($t[4]*100/30);
    echo $r[0]."</td>
    <td>30</td>
    <td>  <input type='number' name='s1m1' value=$t[4] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    $p=round($t[5]*100/30);
    echo $r[0]."</td>
    <td>30</td>
    <td>  <input type='number' name='s1m1' value=$t[5] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    $p=round($t[6]*100/30);
    echo $r[0]."</td>
    <td>30</td>
    <td>  <input type='number' name='s1m1' value=$t[6] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
  </tr></table><br>";

  ?>





  <?php
      $result=mysqli_query($link,"select SubjectName from $department");
      echo "<h2>".strtoupper($rollno)." Mid Exam : 2</h2>";
      $r=mysqli_fetch_row($result);
  echo "<input name='rollno' value='$rollno' hidden/>";
  echo "<input name='de' value='$deptable' hidden/>";
      echo '<br><table style="width:50%">
    <tr>
      <th>SubjectName</th>
      <th>Max Marks</th>
      <th>Obtained Marks</th>
      <th>Percentage</th>
    </tr>
    <tr><td>';
  $p=round($t[1]*100/30);
    echo $r[0]."</td><td> 30</td>
      <td>  <input type='number' name='s1m1' value=$t[1] readonly> </td>
      <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>


    </tr>
    <tr>
      <td>";
  $r=mysqli_fetch_row($result);
  $p=round($t[2]*100/30);
    echo $r[0]."</td>
    <td>30</td>
    <td>  <input type='number' name='s1m1' value=$t[2] readonly> </td>
    <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
  </tr>
  <tr>
    <td>";
      $r=mysqli_fetch_row($result);
      $p=round($t[3]*100/30);
      echo $r[0]."</td>
      <td>30</td>
      <td>  <input type='number' name='s1m1' value=$t[3] readonly> </td>
      <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
      </tr>
      <tr>
        <td>";
      $r=mysqli_fetch_row($result);
      $p=round($t[4]*100/30);
      echo $r[0]."</td>
      <td>30</td>
      <td>  <input type='number' name='s1m1' value=$t[4] readonly> </td>
      <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
      </tr>
      <tr>
        <td>";
      $r=mysqli_fetch_row($result);
      $p=round($t[5]*100/30);
      echo $r[0]."</td>
      <td>30</td>
      <td>  <input type='number' name='s1m1' value=$t[5] readonly> </td>
      <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
      </tr>
      <tr>
        <td>";
      $r=mysqli_fetch_row($result);
      $p=round($t[6]*100/30);
      echo $r[0]."</td>
      <td>30</td>
      <td>  <input type='number' name='s1m1' value=$t[6] readonly> </td>
      <td>  <input type='text' name='s1m1' value='$p %'  readonly> </td>
    </tr></table><br>";

?>





  <button type="submit"  name="Back" id="cb">
    Back</button>
<a href="index.html" <button type="cancel" name="Cancel" id="caneclbutton">Logout</button>
</a>

  </body>
</html>
