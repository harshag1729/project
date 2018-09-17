<?php
session_start();
$a=$_POST['a'];
$b=$_POST['b'];
if($a=="" || $b=="")
{
	echo "<script>alert('Fill Details');</script>";
}
else
{
	mysql_connect("localhost","root","");
	mysql_select_db("lnmiit");
	$query="SELECT * FROM netcamp WHERE name='$a' AND password='$b'";
	$result=mysql_query($query);
	$count=mysql_num_rows($result);
	if($count!=0)
	{
		$_SESSION['name']=$a;
		header("location:welcome.php");
	}
	else
	{
		echo "User Not Found";
	}
}
?>