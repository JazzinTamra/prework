<?php //sessiontext.php p305
session_start();

if (!isset($_SESSION['count'])) $_SESSION['count'] = 0;
else ++$_SESSION['count'];

echo $_SESSION['count'];
?>