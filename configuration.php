<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "fut_team";


$conn = mysqli_connect($localhost,$username,$password,$dbname);


if(!$conn)
{
    die("the connection is failed please check again!");
}


?>