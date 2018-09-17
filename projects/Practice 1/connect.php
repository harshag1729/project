<?php
$p=$_POST['a'];
$q=$_POST['b'];
$r=$_POST['c'];
$s=$_POST['d'];
mysql_connect("localhost","root","");
mysql_select_db("practice1");
$query="INSERT INTO student(name,email,password,phone) VALUES('$p','$q','$r','$s')";
mysql_query($query);
echo "ADD HO GYA DATABASE MEi";
?>