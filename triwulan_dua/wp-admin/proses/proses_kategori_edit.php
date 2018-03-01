<?php 
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';

	$nama = isset($_POST['nama']) ? $_POST['nama'] :'';
	$status = isset($_POST['status']) ? $_POST['status'] :'';
	$id = isset($_POST['id']) ? $_POST['id'] :'';

	if (!empty($nama)) {

	mysqli_query($connect, "
			UPDATE category
			SET nama = '$nama', status = '$status'
			WHERE id = '$id'
			");
		header("location:../kategori.php");
	} else {

		echo "Silahkan lengkapi  <a href='../kategori_tambah.php'>Kategori</a>";
	}
} else {
  	echo "Please <a href='../login.php'>login</a> first.";
}
?>