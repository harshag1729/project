<?php
$x=$_POST["a"];
$y=$_POST["b"];
$z=$_POST["c"];
if($x==""||$z=="")
{
echo "pura toh fill kar";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");
$query="SELECT * FROM student WHERE name='$x' and password='$z'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
echo "sorry name NHI HAI";
}
else
{
$query1="UPDATE student SET phone='$y' WHERE name='$x' and password='$z'";
mysql_query($query1);
echo "HO GAYA!!!"; 
}







}
?>
