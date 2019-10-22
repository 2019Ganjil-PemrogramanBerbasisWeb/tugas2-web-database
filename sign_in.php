<?php 

echo session_save_path();
session_start();

include 'conn.php';
 

$email = $_POST['email'];
$pass = $_POST['pass'];
 
echo "$email $pass";
 
$login = mysqli_query($conn,"select * from account where email='$email' and pass='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
header();
 
if($cek > 0){ 

  $_SESSION['email'] = $email;
  $_SESSION['pass'] = $pass; 

  header("location:index2.php");
}else{  
  echo "<script>
  alert('Email/Password yang anda masukkan salah');
  window.location.href='sign_in.html';
  </script>";
}
?>