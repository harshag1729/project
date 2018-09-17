<?php
	$a=$_POST['a'];
	$b=$_POST['b'];
	if($a=="" || $b=="")
	{
		echo"<html>
			<head>
				<title>Indian Railways</title>
			</head>
			<script>
                alert('Enter all details');
            </script>
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
            while($row=mysql_fetch_array($result))
            {
                
                 session_start();
             if(isset($_SESSION[$row[0]]))
             {
                 echo "<h1> Welcome ".$SESSION[$row[0]]."</h1>";
                     
                 echo "<a href='index1.php'><input type=button value=logout ></a>";
                 
             }
                
                 echo "<html>
                        <form method=POST action=train_detail.php>
                        
                       Welcome, $row[0]
                       <p align=right><a href=index1.php><input type=button value=Logout title=Logout></a></p>
                       <p align=center><a href=booking_history.php><input type=button value=Booking_History title=Click to get Booking History></a>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href=cancel_ticket.php><input type=button value=Cancel_Ticket title=Cancel></a>
                       <br><br>
                       <a href=pnr_status.php><input type=button value='Pnr Status' title=Click to get status></a>
                       </p>
                       
                       TO:
                       <input type=text name=to size=20>
                       FROM:
                       <input type=text name=from size=20><br>
                       Date Of Journey:
                       <input type=text name=doj size=10>
                       Day Of Journey:
                       <input type=text name=day size=10><br>
                       <input type=submit value=Find_Train>
                       </form>
                       </html>";
            }
			
		}
	}
?>


