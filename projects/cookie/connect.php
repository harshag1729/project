<?php
	$x=$_POST['a'];
	
	$z=$_POST['c'];
	mysql_connect("localhost","root","");
	mysql_select_db("session");
	$query="INSERT INTO cookie(name,password) VALUES('$x','$z')";
	mysql_query($query);
	echo "HO GAYA BHAI";
?>