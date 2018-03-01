<?php 
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';

	$nama = isset($_POST['nama']) ? $_POST['nama'] :'';
	$email = isset($_POST['email']) ? $_POST['email'] :'';
	$password = isset($_POST['password']) ? $_POST['password'] :'';

	if (!empty($nama) && !empty($email) && !empty($password)) {
		
		mysqli_query($connect, "INSERT INTO author VALUES (null,'$nama', '$email', '$password')");

		header("location:../user.php");
	} else {
		echo "Silahkan Lengkapi Data <a href='../user_tambah.php'";
	}
}else {
	echo "Please <a href='../login.php'>login</a> first.";
}
?>