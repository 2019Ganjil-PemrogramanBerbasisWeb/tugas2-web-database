<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$re_pass = $_POST['re_pass'];

if (!empty($name) || !empty($email) || !empty($pass) || !empty($re_pass)) {
    $host = "localhost";
       $dbUsername = "root";
       $dbPassword = "";
       $dbname = "kospin";
       //create connection
       $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
       if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From account Where email = ? Limit 1";
     $INSERT = "INSERT Into account (id, name, email, pass, re_pass) values(?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("issss",$id,$name,$email,$pass,$re_pass);
      $stmt->execute();
      echo "Registered! Please sign in";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style_sign.css">
</head>
<body>
<div>
<section>
    <div class="form_button">
        <a href="sign_in.html">Sign In here</a>
</div>
</section>
</body>
</html>