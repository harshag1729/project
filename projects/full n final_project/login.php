<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
        mysql_connect("localhost","root","");
        mysql_select_db("irctc");
        $query="SELECT * FROM users WHERE username='$a' and password='$b' ";
        $result=mysql_query($query);
        $count=mysql_num_rows($result);
        if($count==0)
        {
            echo "<script>
                alert('sorry user not exits')
                </script>";
            echo "<script>location.href='index1.php'
            </script>";
        }
        else
        {
            ($row=mysql_fetch_array($result)
             
             session_start();
             if(isset($_SESSION[$row[0]]))
             {
                 echo "<h1> Welcome ".$SESSION[$row[0]]."</h1>"
                     
                 echo "<a href='index1.php'><input type=button value=logout ></a>";
                 
             }
                
           
        }
?>


