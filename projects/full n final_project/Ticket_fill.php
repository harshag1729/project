<html>

    <br>
    <br>
    <br>
    <br>
    
    
    <?php
    $train_no=$_POST['train_no'];
    mysql_connect("localhost","root","");
    mysql_select_db("irctc");
    $query="SELECT * FROM train WHERE number='$train_no'";
    $result=mysql_query($query);
    $row=mysql_fetch_array($result);
     
            echo "<html>
                    <p align=center>
                    <b>$row[1] :: $row[0]</b>
                    </p>
                    </html>";
        
    ?>
    <br>
    <form method="POST" action="connect_ticket.php">
    <center>
    <input type="text" name="boarding_station" size="30" placeholder="Enter Boarding station"><br><br>
        
    <input type="text" name="name" size="30" placeholder="Enter Name"><br><br>
    <input type="number" name="age"  size="5" placeholder="Enter Age"><br><br>
    <input type="text" name="gender" size="10" placeholder="Enter Gender"><br><br>
    <input type="text" name="preference" size="10" placeholder="Seat Preference"><br><br>
    <input type="text" name="id" size="10" placeholder="Id Type"><br><br>
    <input type="number" name="seat" size="30" placeholder="Total number of seats">
    <p align="center"><input type="submit" value="Confirm Booking">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" value="Reset">
    </p>
    </center>
    
        
    
    
    

    
</form>
</html>