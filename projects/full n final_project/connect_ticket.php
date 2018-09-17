<?php
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $boarding_station=$_POST['boarding_station'];
    $pnr=mt_rand(100000,999999);
   
//    echo "<script>alert('$age');</script>";
    mysql_connect("localhost","root","");
    mysql_select_db("irctc");
    $query0="SELECT * FROM train WHERE start='$boarding_station'";
    $result0=mysql_query($query0);
    $row0=mysql_fetch_array($result0);
//echo "<script>alert('$row0[0]');</script>";
    $train_no=$row0[1];
    $destination=$row0[3];
    $day=$row0[4];
    $train_name=$row0[0];
   
    $query1="INSERT INTO `pnr_no` (
`pnr` ,
`doj` ,
`to` ,
`from` ,
`p_name` ,
`age`
)
VALUES ('$pnr','$row0[4]','$row0[3]','$boarding_station','$name','$age')";
    mysql_query($query1);
    echo "<html>
          <head>
              <title>Ticket</title>
          </head>
          <center>
          <br><br><br><br><br><br><br>
          Pnr Number:$pnr<br><br>
          $row0[1]&nbsp;&nbsp;::&nbsp;&nbsp;$row0[0]<br>
          <br>
          Boarding From:$boarding_station<br><br>
          Destination :$destination<br><br>
          Passenger Name:$name<br><br>
          Age:$age<br><br>
          <a href='existing.php'><input type=button value=Home></a><br>
          </hmtl>";
?>