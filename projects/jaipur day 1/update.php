<?php
$x=$_POST['a'];

$z=$_POST['c'];
mysql_connect("localhost","root","");
mysql_select_db("india");
$query="UPDATE student SET email='$z' WHERE name='$x'";
mysql_query($query);
echo "ho gaya";
?>