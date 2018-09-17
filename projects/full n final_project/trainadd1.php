<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
if($a==""||$b==""||$c==""||$d==""||$e=="")
{
    echo "Please fill all the details";
}
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("irctc");
    $query="SELECT * FROM train WHERE NUMBER='$b'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
    if($count==0)
    {
        $query1="INSERT INTO train (name,number,start,stop,day) VALUES ('$a','$b','$c','$d','$e')";
        mysql_query($query1);
        echo "Train added";
    }
    else
    {
        echo "Train already present";
    }
}
?>