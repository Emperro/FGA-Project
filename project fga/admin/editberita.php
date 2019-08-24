<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judul = $_POST['judul'];
$gambar = $_POST['gambar'];
$berita = $_POST['berita'];
$tanggal =$_POST['tanggal'];

$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$x		  = explode('.', $nama_file);
$getekstensi = strtolower(end($x));
$ekstensi = array('png','jpg');
$gambar = $nama_file.'.'.$getekstensi;
$direktori   = "img/$gambar";

move_uploaded_file($lokasi_file,$direktori);
 
// mengupdate data ke database
mysqli_query($koneksi,"update berita set judul='$judul', gambar='$gambar', berita='$berita', tanggal='$tanggal' where id='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:berita.php");
 
?>