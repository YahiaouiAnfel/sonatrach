<?php
session_start();
$_SESSION = array();
 session_destroy();
unset($_SESSION);
unset($_COOKIE);
header('Location: ../index.php');
exit;
?>