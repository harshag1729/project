<?php
    $day=$_POST['day'];
    mysql_connect("localhost","root","");
    mysql_select_db("pnr");
    $query="SEELCT * FROM passenger WHERE passenger_name='$name'";
    $result=mysql_query($query);
    $count=mysql_num_rows($result);
        if($count==0)
        {
            echo " sorry no data found";
        }
        else
        {
            while($row=mysql_fetch_array($result))
            {
                echo"<table border='2'>";
                echo"<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "</tr>";
                echo "</table>";
            }
        }
?>
