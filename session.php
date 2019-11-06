<?php
session_start();
if (!isset($_SESSION["login"]))
{
header("location: index.html");}
exit;
?>

<?php 
session_start();

include 'conn.php';

if( isset($_SESSION["login"]) ) {
	header("Location: login.php");
  exit;
}
 
if( isset($_POST["login"]) ) 
                {
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    echo "$email $pass";
 
                    $result = mysqli_query($conn,"select * from account where email='$email' and pass='$pass'");
                    if( mysqli_num_rows($result) === 1 ) 
                            {
                            $row = mysqli_fetch_assoc($result);
                            }
                            if( password_verify($pass, $row["pass"]) ) 
                            {
                            $_SESSION["login"] = true;
                            header("location: login.php");
                            exit;
                            }
                }
else
{  
  echo "<script>
  alert('Email/Password yang anda masukkan salah');
  window.location.href='sign_in.php';
  </script>";
}
?>