<?php
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=mt_rand(100000,999999);
mysql_connect("localhost","root","");
mysql_select_db("pnr");
$query="INSERT INTO passenger (pnr,passenger_name,age,gender) VALUES ('$e','$b','$c','$d')";
mysql_db_query("pnr",$query);
echo "Booking confirmed";
?>