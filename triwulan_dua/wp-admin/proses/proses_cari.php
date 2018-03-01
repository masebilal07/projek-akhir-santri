<?php
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';

	$nama   = isset($_POST['cari']) ? $_POST['cari'] : '';

	if (!empty($nama)) {
		
		mysqli_query($connect, "SELECT * FROM article WHERE judul LIKE %$nama%");

		header("location:../index.php");

	} else {
		echo "I Kosong";
	}
} echo "<href='../login.php'>";
?>