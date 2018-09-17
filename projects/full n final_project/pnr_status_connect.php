<?php
    $pnr=$_POST['pnr'];
    if($pnr=="")
    {
        echo "<script>
                alert ('Fill the PNR_NO.') 
            </script>";
        
    }
else
{
    mysql_connect("localhost","root","");
    mysql_select_db("irctc");
    $query="SELECT * FROM pnr_no WHERE pnr='$pnr'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
        if($count==0)
        {
            echo " WRONG PNR_NO.";
        }
        else
        {
            while($row=mysql_fetch_array($result))
            {
                echo"<html>
                <center><br><br><br><br><br><br>
                        Pnr Number :: $row[0]<br><br><br>
                        Day of Journey :: $row[1]<br><br><br>
                        TO :: $row[2] &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        FROM :: $row[3]<br><br><br>
                        Passenger Name :: $row[4]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                      Age :: $row[5] <br><br><br>
                        <a href='book_history.php'><input type=button value=BACK></a>
                        </center>
                        </html>";
                
                
                
            }
        }

}

?>
