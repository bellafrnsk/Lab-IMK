<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Belajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<title>DAFTAR</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#frmDaftar').validate({
			rules: {
				pengguna: {
					minlength:10,
					maxlength:10
				},
				sandi:{
					minlength:8,
					maxlength:20
				},
				sandi2:{
					equalTo:"#sandi"
				},
				nama:{
					minlength:10,
					maxlength:20
				},
				email: {
				email: true
			}
			},
			messages: {
				pengguna: {
					required: "NISN harus diisi",
					minlength: "NISN Harus 10 karakter",
					maxlength: "NISN Harus 10 karakter"
				},
				sandi:{
					required:"Password harus diisi",
					minlength:"Panjang password minimal 8 karakter",
				},
				sandi2:{
					equalTo:"Konfirmasi Password Tidak Sesuai Dengan Password"
				},
				nama:{
					required: "Nama harus diisi",
					minlength: "Nama minimal 10 karakter",
					maxlength: "Nama maximal 20 karakter"
					},
				email: {
					required: "Email harus diisi",
					email: "Format Email tidak sesuai"
				}
			}
		});
		});
	</script>
</head>
<body>

	<div align='center'>
	<form action="register.php" method="post" id="frmDaftar">
	<div class="jumbotron" style="margin-bottom:0px; color: rgb(255, 255, 255); background-color: darkgreen;">
	<h2 class="text-center" style="font-size: 50px; font-weight: 600;">Klub Belajar</h2>
	<h5 class="text-center" style="font-size: 20px; font-weight: 600;">SMA Harapan Bangsa</h5>
    </div>
    	<div class="container">
        <div class="col-md-6 col-md-offset-6">
		<table>
		<form method = "post">
         <fieldset>     
         <br><br><br>
         <div class="form-group" class="center">			
			<tr><td>NISN</td><td><input type="number" name="pengguna" required></td></tr>
			<tr><td>Password</td><td><input id="sandi" type="password" name="sandi" required></td></tr>
			<tr><td>Konfirmasi Password</td><td><input type="password" name="sandi2" required></td></tr>
			<tr><td>Nama</td><td><input type="text" name="nama" required></td></tr>
			<tr><td>Email</td><td><input type="email" name="email" required></td></tr>
		</table>
		<input type="submit" class="btn btn-md btn-success btn-block" name="Daftar">
	</div>
	</form></div>

</body>
</html>
