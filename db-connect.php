<?php
$hostname = "gestordecitasdemo-server.mysql.database.azure.com";
$username = "dptkvmzuil";
$password = "Z5UE64DVF78R082Y$";
$db_name = "members";
$port = "3306";
$sslmode = "require";
$flag = "MYSQLI_CLIENT_SSL";

/*$conn = new mysqli($hostname, $username, $password, $db_name, $port, $sslmode, $flag);
if (!$conn) {
   die('Database connection failed');
}*/

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "gestordecitasdemo-server.mysql.database.azure.com", "dptkvmzuil", "Z5UE64DVF78R082Y$", "members", 3306, MYSQLI_CLIENT_SSL);
if (!$conn) {
   die('Database connection failed');
}

?>
