<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
if($x==""||$y==""||$z=="")
{
    echo "fill all mamu!!!";
}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("practice1");
    $query="SELECT * FROM student WHERE name='$x' and password='$z'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count==0)
    {
        echo "data not found";
    }
    else
    {
        $query1="UPDATE student set phone='$y' WHERE name='$x' and password='$z' ";
        mysql_query($query1);
        echo "updated database!!";
    }
}
?>