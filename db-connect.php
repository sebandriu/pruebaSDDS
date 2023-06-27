<?php
$hostname = "localhost";
$username = "id20972116_root";
$password = "Seba23032000!";
$db_name = "members";
$port = "3306";

$conn = new mysqli($hostname, $username, $password, $db_name, $port);
if (!$conn) {
   die('Database connection failed');
}

/*$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "ca.pem", NULL, NULL);
mysqli_real_connect($conn, "gestordecitasdemo-server.mysql.database.azure.com", "dptkvmzuil", "Z5UE64DVF78R082Y$", "members", 3306, MYSQLI_CLIENT_SSL);
if (!$conn) {
   die('Database connection failed');
}*/

?>
