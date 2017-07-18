<?php
session_start();

$host = "localhost";
$databasename = "projecttrack";
$databaseuser = "root";
$databasepassword = "123456";

mysql_connect($host,$databaseuser,$databasepassword);
if ($ex != "no")
mysql_select_db($databasename);
//
$tablehead = '<table border="1" cellspacing="0" cellpadding="4" bordercolor="#999999">';
?>
