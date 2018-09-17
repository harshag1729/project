<?php
    $pnr=$_POST['pnr'];
    if($pnr=="")
    {
        echo"<html>
         <head>
            <title>'Alert'</title>
         </head>
         <script>
          alert('Enter PNR Number');
          </script>
         </html>";
    }
    else
    {
        mysql_connect("localhost","root","");
        mysql_select_db("irctc");
        $query="SELECT * FROM pnr_no WHERE pnr='$pnr'";
        $result1=mysql_query($query);
        $row=mysql_fetch_array($result1);
        $doj=$row[1];
        $to=$row[2];
        $from=$row[3];
        $p_name=$row[4];
        $age=$row[5];
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count==0)
        {
            echo"<html>
                 <head>
                     <title>'Alert'</title>
                 </head>
                 <script>
                  alert('Enter correct PNR Number');
                  </script>
                 </html>";
        }
        else
        {
            $query1="DELETE FROM `pnr_no` WHERE CONVERT(`pnr_no`.`pnr` USING utf8) = '$pnr' AND CONVERT(`pnr_no`.`doj` USING utf8) = '$doj' AND CONVERT(`pnr_no`.`to` USING utf8) = '$to' AND CONVERT(`pnr_no`.`from` USING utf8) = '$from' AND CONVERT(`pnr_no`.`p_name` USING utf8) = '$p_name' AND CONVERT(`pnr_no`.`age` USING utf8) = '$age' LIMIT 1";
            mysql_query($query1);
            echo"<html>
                 <head>
                     <title>'Success'</title>
                 </head>
                 <center>
                     <b>Your Ticket with PNR Number::$pnr has been successfully cancelled</b>
                     <a href='existing.php'><input type=button value=Home></a>
                 </center>
                 </html>";
        }
    }
?>