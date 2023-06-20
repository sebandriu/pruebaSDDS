<?php
$host = "gestordecitasdemo-server.mysql.database.azure.com";
$username = "dptkvmzuil";
$pw = "Z5UE64DVF78R082Y$";
$db_name = "members";
$port = "3306";
$flag = "MYSQLI_CLIENT_SSL";

$conn = new mysqli($host, $username, $pw, $db_name, $port, $flag);
if (!$conn) {
   die('Database connection failed');
}
?>