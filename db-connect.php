<?php
$host = "134.209.191.58";
$username = "hvewsyfpgs";
$pw = "3xeDmtDX8y";
$db_name = "hvewsyfpgs";

$conn = new mysqli($host, $username, $pw, $db_name);
if (!$conn) {
   die('Database connection failed');
}
