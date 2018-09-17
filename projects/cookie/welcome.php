<?php
session_start();
if(isset($_SESSION['name']))
{
    echo $_SESSION['name'];
    echo "&nbps; You Are successfully logged in!!!";
    echo "<embed src='abc.mp4' quality=high height=70% width=70%></embed>";
    echo "<a href='logout.php'>LOGOUT</a>";
}
else
{
    header("location:login.php");
}
?>

