<?php 

$con = mysqli_connect("localhost","root","", "login_db");
//check connection
if(mysqli_connect_errno())
{
    echo "_Failed to connect to MYSQL:" . mysqli_connect_error();
}


?>