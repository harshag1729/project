<?php
$x=$_POST['a'];
mysql_connect("localhost","root","");
mysql_select_db("india");
$query="SELECT * FROM student WHERE name='$x'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{
  echo "<table border='2'";
  echo "<tr>";
  echo "<td".$row[0]."</td>";
  echo "<td".$row[1]."</td>";
  echo "<td".$row[2]."</td>";
  echo "</tr>";
  echo "</table>";
}
?>