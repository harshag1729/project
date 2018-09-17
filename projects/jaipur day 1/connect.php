<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
mysql_connect("localhost","root","");
mysql_select_db("india");
$query="INSERT INTO student (name,email,password) VALUES ('$x','$y','$z')";
mysql_db_query("india",$query);
echo "Ho gya mamu!";




?>