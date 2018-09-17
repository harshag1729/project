<?php
$x=$_POST['a'];
$y=$_POST['b'];
if($x=="" || $y=="")
{
    echo "fill all";
}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("practice1");
    $query="SELECT * FROM student WHERE name='$x' and password='$y'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count==0)
    {
        echo"authority denied";
    }
    else
    {
        $query1="DELETE FROM student WHERE name='$x' and password='$y'";
        mysql_query($query1);
        echo"kaam ho gya mamu";
    }
}
?>