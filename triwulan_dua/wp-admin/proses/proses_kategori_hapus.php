<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$id   = isset($_GET['ID']) ? $_GET['ID'] : '';
	if (!empty($id)) {
		mysqli_query($connect, "
			DELETE FROM category
			WHERE id = '$id'
			");
		header("location:../kategori.php");
	} else {
		echo "ID kosong";
	}
} else {
  	echo "please <a href:'../login.php'>Login</a>first";
}
?>