<?php
$servername = "localhost";
$username = "root";
$password = "5761";
$dbname = "zeedatabase";
// Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

// Check connection
if(!$conn){
    echo "CONNECT FAILED  ".mysqli_connect_error();
}