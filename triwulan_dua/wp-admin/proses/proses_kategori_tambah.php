<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$status   = isset($_POST['status']) ? $_POST['status'] : '';
	

	if (!empty($nama) && !empty($status)) {

		mysqli_query($connect, "
			INSERT INTO category 
			VALUES(null,'$nama','$status')");

		header("location:../kategori.php");

	} else {

		echo "Silahkan lengkapi data <a href='../kategori_tambah.php'>kategori</a>";

	}


} else {

  	echo "Please <a href='../index.php'>login</a> first.";

}
?>