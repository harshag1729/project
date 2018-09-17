<?php
    $x=$_POST['a'];
    $y=$_POST['b'];
    if($x==""||$y=="")
    {
        echo"fill to kar";
    }
    else
    {
        mysql_connect("localhost","root","");
        mysql_select_db("netcamp");
        $query="SELECT * FROM student WHERE name='$x' and password='$y' ";
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
                echo "</tr>";
                echo "</table>";
            }
        }
        
    }
?>