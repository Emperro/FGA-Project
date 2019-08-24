<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$no = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into admin (id,nama,username,password) values('$no','$nama','$username','$password')");

 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>