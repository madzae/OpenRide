<?php
session_start();
include 'koneksi.php';

$username = $_POST['nama'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select * from pengemudi where nama='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nama'] = nama;
	$_SESSION['motor'] = motor;
	$_SESSION['nopol'] = nopol;
	$_SESSION['ponsel'] = ponsel;
	$_SESSION['status'] = "login";
	header("location:map-driver.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
