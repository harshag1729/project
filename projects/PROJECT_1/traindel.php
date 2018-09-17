<html>
	<head>
		<title>Delete existing train</title>
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
		<br><br><br><br><br><br><br><br>
		<h2 align="center">Enter train delails</h2>
		<center>
			<form method="POST" action="traindel1.php">
				<div class="absolute">
					<input type="text" name="a" size="30" placeholder="Enter Train Number">
					<br><br><br><br>
					<input type="submit" value="Delete Train" title="Submit">
				</div>
			</form>
		</center>
	</div>
</html>