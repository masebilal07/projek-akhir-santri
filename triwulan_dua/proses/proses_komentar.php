<?php
session_start();
// if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';

	$nama = isset($_POST['username']) ? $_POST['username'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$komentar = isset($_POST['komentar']) ? $_POST['komentar'] : '';
	$number = isset($_POST['number']) ? $_POST['number'] : '';

	$id = isset($_POST['art']) ? $_POST['art'] : '';
;

	if (!empty($nama) && !empty($email) && !empty($komentar) && !empty($number)) {
		
		mysqli_query($connect, "INSERT INTO comment VALUES (null,'$nama','$email','$number','$id','$komentar')");

		header("location:../post.php?id=$id");

	} else {
		echo "Silahkan Masukan Data";
	}
// } echo "<href='../login.php'>";
?>