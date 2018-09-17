<?php
//this is to hold the value//
$x=$_POST['a'];
//this for connection//
mysql_connect("localhost","root" ,"");
mysql_select_db("india");
$query="DELETE FROM student WHERE name='$x'";
mysql_query($query);
echo " ho gaya";
?>