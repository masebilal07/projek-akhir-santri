<?php 
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';

	$judul = isset($_POST['judul']) ? $_POST['judul'] :'';
	$kategori = isset($_POST['kategori']) ? $_POST['kategori'] :'';
	$isi = isset($_POST['isi']) ? $_POST['isi'] :'';
	$status = isset($_POST['status']) ? $_POST['status'] :'';
	$id = isset($_POST['id']) ? $_POST['id'] :'';
	$tanggal_input = date('Y-m-d H:i:s');
	$user_id = $_SESSION['user_id'];

	if (!empty($judul) && !empty($kategori) && !empty($isi)) {
		mysqli_query($connect, "
			UPDATE article 
			SET judul = '$judul', kategori_id = '$kategori', isi = '$isi', status = '$status', tanggal = '$tanggal_input', user_id = '$user_id' 
			WHERE id = '$id'");
		header("location:../artikel.php");
	} else {
		echo "Silahkan lengkapi data <a href='../artikel_tambah.php'>santri</a>";
	}
} else {
  	echo "Please <a href='../login.php'>login</a> first.";
}
?>