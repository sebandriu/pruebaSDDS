<?php
$host = "20.119.144.14";
$username = "dptkvmzuil";
$pw = "Z5UE64DVF78R082Y$";
$db_name = "members";

$conn = new mysqli($host, $username, $pw, $db_name);
if (!$conn) {
   die('Database connection failed');
}
