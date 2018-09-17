<?php
    $to=$_POST['to'];
    $from=$_POST['from'];
    $day=$_POST['day'];
    if($to==""||$from==""||$day=="")
    {
        echo "Fill all Details";
    }
    else
    {
        mysql_connect("localhost","root","");
        mysql_select_db("irctc");
        $query="SELECT * FROM train WHERE stop='$to' AND start='$from'";
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count==0)
        {
            echo "No Train Found";
        }
        else
        {
            while($row=mysql_fetch_array($result))
            {
                echo"<table border='2'>";
                echo"<tr>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "</tr>";
                echo "</table>";
            }
            echo "<html>
            <form method=POST action=Ticket_fill.php>
            Enter Train number:<input type=number name=train_no size=15><br>
            <input type=submit value='Book Now'>
            </form>
            </html>
            ";
        }
        
    }
?>