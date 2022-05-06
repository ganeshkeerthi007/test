<?php
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server = "localhost:$port";  


$con = mysqli_init();mysqli_real_connect($server, "azure", "6#vWHD_$", "localdb", 3306, MYSQLI_CLIENT_SSL);
?>
