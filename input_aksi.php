<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];

//menginput data ke database
mysqli_query($koneksi,"INSERT INTO akun VALUES('$username','$nama','$email')");

//mengalihkan halaman kembali ke index.php
header("location:profil.php");

?>