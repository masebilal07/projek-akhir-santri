<?php 
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$id = isset($_GET['ID']) ? $_GET['ID'] :'';
	if (!empty($id)) {
		mysqli_query($connect, "DELETE FROM article WHERE id='$id'");
		header("location:../artikel.php");
	} else {
		echo "ID kosong";
	}
} else {
	echo "please <a href:'../index.php'>Login</a>first";
}
?>