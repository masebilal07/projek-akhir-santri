<?php
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';

	$cari = isset($_POST['cari']) ? $_POST['cari'] : '';

	if (!empty($cari)) {
		
		mysqli_query($connect, "INSERT INTO cari VALUES (null,'$cari')");

		header("location:../index.php");

	} else {
		echo "Silahkan Masukan Data";
	}
} echo "<href='../login.php'>";
?>