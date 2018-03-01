<?php 
function penulis($id)
{
	 include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM author WHERE id = $id");
	$row = mysqli_fetch_array($sql);
	return $row['nama'];
}
function kategori($id)
{
	 include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM category WHERE id = $id");
	$row = mysqli_fetch_array($sql);
	return $row['nama'];
}
function komentar($id)
{
	include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM comment WHERE id = $id");
	$row = mysqli_fetch_array($sql);
	return $row['id'];
}
// function jumlah($id) 
// {
// 	include 'proses/koneksi.php';
// 	$sql = mysqli_query($connect, "SELECT * FROM comment WHERE id = $id");
// 	$row = mysqli_num_rows($sql);

// 	return $row;

// }

?>