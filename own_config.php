<?php
include('config.inc.php');
$db_server = $dbconfig['db_server'];
$db_username = $dbconfig['db_username'];
$db_password = $dbconfig['db_password'];
$db_name = $dbconfig['db_name'];
$mysqli = new mysqli($db_server , $db_username , $db_password , $db_name );						
?>
