<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server = "localhost:$port";  
$con = mysqli_init();mysqli_real_connect($server, "azure", "6#vWHD_$", "localdb");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
?>
