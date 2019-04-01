<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

 
// update data ke database
mysqli_query($koneksi,"update user set nama='$nama', username='$username', email='$email', password='$password', level='$level' where id_user='$id_user'");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php?page=user");
 
?>