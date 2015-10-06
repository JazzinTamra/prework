<?php //sessiontext.php
session_start();

if (!issest($_SESSION['count'])) $_SESSION['count'] = 0;
else ++$_SESSION['count'];

echo $_SESSION['count'];
?>