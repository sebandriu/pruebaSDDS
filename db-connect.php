<?php

/*$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/certificado/ca.pem", NULL, NULL);
mysqli_real_connect($conn, "membersdemo.mysql.database.azure.com", "deez", "Seba23032000", "members", 3306, MYSQLI_CLIENT_SSL);



$AZURE_MYSQL_HOST = "membersdemo.mysql.database.azure.com";
$AZURE_MYSQL_USERNAME = "aqwypsuyau";
$AZURE_MYSQL_PASSWORD = "D171TZ220850C0R2$";
$AZURE_MYSQL_DBNAME = "gestordecitasdemo-database";
$AZURE_MYSQL_PORT = "3306";
$AZURE_MYSQL_FLAG = "MYSQLI_CLIENT_SSL";*/


$conn = new mysqli($AZURE_MYSQL_HOST, $AZURE_MYSQL_USERNAME, $AZURE_MYSQL_PASSWORD, $AZURE_MYSQL_DBNAME, $AZURE_MYSQL_PORT, $AZURE_MYSQL_FLAG);
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
