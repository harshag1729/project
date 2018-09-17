<?php
	$a=$_POST['a'];
	$b=$_POST['b'];
	if($a=="" || $b=="")
	{
		echo"<html>
			<head>
				<title>Indian Railways</title>
			</head>
			<div style=background-color:lightblue>
				<h1 align=center>Fill all details</h1>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>	
			<center>
				<a href=index1.php><input type=button value=Home title=Go to Homepage></a>
			</center>
			</html>";
			
	}
	else if($a=="root" && $b=="bitmesra")
	{
		header ("Location: admin.php");
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("irctc");
		$query="SELECT * FROM users WHERE username='$a' AND password='$b'";
		$result=mysql_query($query);
		$count=mysql_num_rows($result);
		if($count==0)
		{
			echo"<html>
					<head>
						<title>Indian Railways</title>
					</head>
					 <div style=background-color:lightblue>
						<h1 align=center>Wrong username or password</h1>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<center>
						<a href=index1.php><input type=button value=Home title=Go></a>
					</center>
				</html>";
		}
		else
		{
			header ("Location: profile.php");
		}
	}
?>