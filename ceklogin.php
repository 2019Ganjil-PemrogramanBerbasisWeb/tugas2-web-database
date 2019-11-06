<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'conn.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$pass = $_POST['pass'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from account where email='$email' and pass='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $row_akun = mysqli_fetch_array($data);
    $_SESSION["name"] = $row_akun["name"];
	$_SESSION['status'] = "login";
	header("location:login.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>