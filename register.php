<?php

	require_once 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<body>
<?php
	$NISN = $_POST['pengguna'];
	$Password = $_POST['sandi'];
	$Nama = $_POST['nama'];
	$Email = $_POST ['email'];
	$sql = "INSERT INTO akun (NISN,Password,Nama,Email) VALUES ('$NISN','$Password','$Nama','$Email')";

	if($koneksi->query ($sql) ===TRUE){
		echo"<h2>Registrasi Akun Anda Berhasil </h2>";
	} else {
		echo "Terjadi Kesalahan:" .$sql."<br/>".$koneksi->error;
	}
	$koneksi->close();
	?>
</body>
</html>