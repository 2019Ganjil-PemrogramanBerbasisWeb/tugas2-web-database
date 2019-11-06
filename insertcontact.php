<?php
session_start();
if($_SESSION['status']!="login"){
	header("location:index.php?pesan=belum_login");
}
else
{
include 'conn.php';
$f_name     = $_POST['f_name'];
$l_name     = $_POST['l_name'];
$email      = $_POST['email'];
$message    = $_POST['message'];

$query="INSERT INTO contact SET f_name='$f_name',l_name='$l_name',email='$email',message='$message'";
mysqli_query($conn, $query);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style_sign.css">
</head>
<body>
<div>
    <a>Your message has been sent!</a>
<section>
    <div class="form_button">
        <a href="contact.php">back</a>
</div>
</section>
</body>
</html>