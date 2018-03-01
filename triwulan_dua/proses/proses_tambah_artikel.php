<?php 
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$judul = isset($_POST['judul']) ? $_POST['judul'] :'';
	$isi = isset($_POST['isi']) ? $_POST['isi'] :'';
	$gambar_nama = $_FILES['gambar']['name'];
	$gambar_size = $_FILES['gambar']['size'];
	$gambar_type = $_FILES['gambar']['type'];
	$gambar_tmp_name = $_FILES['gambar']['tmp_name'];
	$ext = explode('.', $gambar_nama);
	$kategori = isset($_POST['kategori']) ? $_POST['kategori'] :'';
	$penulis = isset($_POST['penulis']) ? $_POST['penulis'] :'';
	$tanggal = date("Y-m-d H:i:s");
	$status = isset($_POST['status']) ? $_POST['status'] :'';
	$folder = '../gambar/';

if (!empty($judul) && !empty($isi) && !empty($kategori)) {
		if (!is_dir($folder)) {
			mkdir($folder, 0777);	
		}
		if (!empty($gambar_nama)) {
			$namaBaru = rand(1,5);
			$name_file 	= $namaBaru.'.'.end($ext);

			move_uploaded_file($gambar_tmp_name, $folder.$nama_file);
			mysqli_query($connect, "
				INSERT INTO artikel 
				VALUES (null,'$judul','$isi','$kategori','$penulis','$tanggal','$status','$nama_file')");	
		} else {
			mysqli_query($connect, "
			INSERT INTO artikel 
			VALUES (null,'$judul','$isi','$kategori','$penulis','$tanggal','$status',null)");
		} 
		header("location:../artikel.php");
	} else {

		echo "Silahkan lengkapi data <a href='../artikel_tambah.php'>kategori</a>";
	}
} else {
  	echo "Please <a href='../login.php'>login</a> first.";
}
?>
		