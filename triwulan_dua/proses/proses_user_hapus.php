<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$id   = isset($_GET['ID']) ? $_GET['ID'] : '';
	if (!empty($id)) {
		mysqli_query($connect, "
			DELETE FROM author 
			WHERE id = '$id'
			");
		header("location:../user.php");
	} else {
		echo "Kosong";
	}
} else {
  	echo "Please <a href='../login.php'>login</a> first.";
}
?>