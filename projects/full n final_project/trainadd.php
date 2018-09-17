<html>
	<head>
		<title>Add new train</title>
	</head>
	<body>
		<style>
			div.absolute 
			{
            	top: 200px;
            	right: 60px;
            	width: 300px;
            	height: 700px;
            	border: 3px ;
            	border-radius: 25px;
        	}
		</style>
	</body>
	
		<div style="background-color:lightblue">
		<h1 align="center">Welcome to Indian Railways</h1>
		<br>
		<br>
		<br>
		<br>
		<br><br><br><br>
		<h2 align="center">Enter train details</h2>
		<center>
			<form method="POST" action="trainadd1.php">
			<div class="absolute">
				<input type="text" name="a" size="30" placeholder="Enter train name"><br>
				<br>
				<input type="text" name="b" size="30" placeholder="Enter train number"><br>
				<br>
				<input type="text" name="c" size="30" placeholder="Source"><br>
				<br>
				<input type="text" name="d" size="30" placeholder="Destination"><br>
				<br>
				<input type="text" name="e" size="30" placeholder="Enter Day">
				<br>
				<br>
				<input type="submit" value="Add Train" title="Submit">
			</div>
				</form>
		</center>
		</div>
	
</html>