<?php
session_start();
if (isset($_SESSION['login'])) {
	
	include 'koneksi.php';

	$id = isset($_GET['ID']) ? $_GET['ID'] : '';

	if (!empty($id)) {
		
		mysqli_query($connect, "DELETE FROM comment WHERE id = '$id'");

		header("location:../komentar.php");
	} else {
		echo "ID Kosong";
	}
	
} else {
	echo "<href='../login.php'>";
}
?>