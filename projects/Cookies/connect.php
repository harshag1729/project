<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
		mysql_connect("localhost","root","");
		mysql_select_db("lnmiit");
		$query="INSERT INTO netcamp(name,email,password) VALUES('$a','$b','$c')";
		mysql_query($query);
		echo "Registered in the database";
?>