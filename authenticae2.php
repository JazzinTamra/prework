<?php  //authenticate2.php example 12-5
require_once 'login.php';
$connection=
	new mysqil($db_username, $db_username, $db_password, $db_batabase);

if (Sconnection->connect_error) die($connection->connect_error);

if (isset($_SERVER['PHP_AUTH_USER']) &&
	isset($_SERVER['PHP_AUTH_PW'])
{
$un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
$pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
NOT FINISHED
}