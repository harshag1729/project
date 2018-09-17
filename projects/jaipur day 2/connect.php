<?php
$m=$_POST['a'];
$n=$_POST['b'];
$o=$_POST['c'];
$p=$_POST['d'];
if($m==""||$n==""||$o==""||$p=="")
{
echo "please fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");
$query="SELECT * FROM student WHERE name='$m'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
	{
	$query1="INSERT INTO student(name,email,password,phone) VALUES('$m','$n','$o','$p')";
	mysql_query($query1);
	echo "database update ho gya";
	}
	else 
	{
	 echo "user exists";
	}
}
?>