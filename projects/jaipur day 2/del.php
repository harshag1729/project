<?php
$x=$_POST['a'];
$y=$_POST['b'];
if($x==""||$y=="")
{
echo "fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");
$query="SELECT * FROM student WHERE name='$x' AND password='$y'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
echo "sorry name and passwd match nhi kiya!";
}
else
{
$query1="DELETE FROM student WHERE name='$x' AND password='$y'";
mysql_query($query1);
echo "delete ho gya mamu!";
}
}
?>
