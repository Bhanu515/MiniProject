<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body
    {
      font-weight: bold;
      background-image: url('images/image1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
       background-size: cover;
    }
    table,td,th {
  border: 1px solid black;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  border-collapse: collapse;
  }
  input{
  /* padding-left: 15px; */
    width: 30%;
    align-items:center;
    background-color:inherit;
  }
   h1{
     margin-left: 39%;
   }
   #cb{
     background-color: green; /* Green */
     border: none;
     color: white;
     padding: 10px 25px;
     border-radius: 15px;
     margin-left:40%;
     margin-top: 125px;
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
     margin-left:110px;
     margin-top: 125px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     font-size: 16px;
   }
   #submit{
     position: absolute;
     margin-top: 50px;
     margin-left: 40%;
     background-color: black;
     color: white;
     border-radius: 10px;
     padding: 10px;
     height: 40px;
     width: 80px;
   }
   #cancel{
    position: absolute;
     margin-top: 50px;
     margin-left: 55%;
     background-color: black;
     color: white;
     border-radius: 10px;
     padding: 10px;
     height: 40px;
     width: 80px;
   }
    </style>
  </head>
  <body>

    <?php


     $deptable=$department."marks";

     $link=mysqli_connect("localhost","System","password","miniproject");
     $result=mysqli_query($link,"select SubjectName from $department");
     $res2=mysqli_query($link,"select * from $deptable where Id='$rollno'");
     $t=mysqli_fetch_row($res2);
     ?>
<form action="updatemarks.php" method="post">

    <?php
    echo "<h1>".strtoupper($department)." ".strtoupper($section)." : ".strtoupper($rollno)."</h1>";
    $r=mysqli_fetch_row($result);
echo "<input name='rollno' value='$rollno' hidden/>";
// echo $department;
// echo $deptable;
echo "<input name='de' value='$deptable' hidden/>";
    echo '<br><table style="width:50%">
  <tr>
    <th>SubjectName</th>
    <th>Mid 1</th>
    <th>Mid 2</th>
    <th>MaxMarks</th>
  </tr>
  <tr><td>';

  echo $r[0]."</td>
    <td>  <input type='number' name='s1m1' value=$t[1] max='30' maxlength='3' > </td>
    <td>  <input type='number' name='s1m2' value=$t[7] maxlength='3'></td>
    <td> 30</td>
  </tr>
  <tr>
    <td>";
$r=mysqli_fetch_row($result);
  echo $r[0]."</td>
  <td>  <input type='number' name='s2m1' value=$t[2] maxlength='3' > </td>
  <td>  <input type='number' name='kkk' value=$t[8] maxlength='3'></td>
  <td>30</td>
</tr>
<tr>
  <td>";
    $r=mysqli_fetch_row($result);
    echo $r[0]."</td>
      <td>  <input type='number' name='s3m1' value=$t[3] maxlength='3' > </td>
      <td>  <input type='number' name='s3m2' value=$t[9] maxlength='3' ></td>
      <td>30</td>
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    echo $r[0]."</td>
      <td>  <input type='number' name='s4m1' value=$t[4] maxlength='3' > </td>
      <td>  <input type='number' name='s4m2' value=$t[10] maxlength='3' ></td>
      <td>30</td
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    echo $r[0]."</td>
      <td>  <input type='number' name='s5m1' value=$t[5] maxlength='3' > </td>
      <td>  <input type='number' name='s5m2' value=$t[11] maxlength='3' ></td>
      <td>30</td>
    </tr>
    <tr>
      <td>";
    $r=mysqli_fetch_row($result);
    echo $r[0]."</td>
    <td>  <input type='number' name='s6m1' value=$t[6] maxlength='3' > </td>
    <td>  <input type='number' name='s6m2' value=$t[12] maxlength='3' ></td>
    <td>30</td>
  </tr></table><br>";

  ?>




<button type="submit" name="button1" id="submit" action="" >UPDATE</button>
<button type="submit" name="button2" id="cancel">Cancel</button>
  </form>
  <form action="back.php" method="post">
       <button type="submit"  name="Back" id="cb">
         Back</button>
     <a href="index.html" <button type="cancel" name="Cancel" id="caneclbutton">Logout</button>
     </a>
   </form>
  </body>
</html>
