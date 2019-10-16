<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'kospin';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$conn){
    die('Failed to connect : '.mysqli_connect_error());
}
?>