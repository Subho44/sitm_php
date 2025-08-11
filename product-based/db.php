<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitm";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo ("connection fail".mysqli_connect_error());
}
?>