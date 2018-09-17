<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $e=$_POST['e'];
	$f=$_POST['f'];
    if($a=="" || $b==""|| $c==""|| $d==""|| $e=="" || $f=="")
    {
        echo "Fill all details";
    }
	else if($f!=$e)
	{
		
		echo "Passwords do not match";
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("irctc");
		$query="SELECT * FROM users WHERE email='$c' AND username='$b'";
		$result=mysql_query($query);
		$count=mysql_num_rows($result);
		if($count==0)
		{
			$query1="INSERT INTO users(name,username,email,phone,password) VALUES('$a','$b','$c','$d','$e')";
			mysql_query($query1);
			header("Location: created.php");
		}
		else
		{
			header("Location: userexists.php");
		}
	}
?>