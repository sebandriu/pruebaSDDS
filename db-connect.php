<?php
$host = "gestordecitasdemo-server.mysql.database.azure.com";
$username = "dptkvmzuil";
$pw = "Z5UE64DVF78R082Y$";
$db_name = "members";

$conn = new mysqli($host, $username, $pw, $db_name);
if (!$conn) {
   die('Database connection failed');
}
