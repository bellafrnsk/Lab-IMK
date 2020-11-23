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
	<form action="profil.php" method="post" id="frmDaftar">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Belajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron" style="margin-bottom:0px; color: rgb(255, 255, 255); background-color: darkgreen;">
<h2 class="text-center" style="font-size: 50px; font-weight: 600;">Klub Belajar</h2>
<h5 class="text-center" style="font-size: 20px; font-weight: 600;">SMA Harapan Bangsa</h5>
    </div>


    <div class="container">
        <br><h5 class="text-center" style="font-size: 30px; font-weight: 600;">Sign In</h5>
        <div class="col-md-8 col-md-offset-8">
	
		<form method = "post">
         <fieldset>     
         <br><br><br>			
			<div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-6" class="center">
                            <input type="text" onkeypress="return Angka(event)" class="form-control" placeholder="NISN" name="pengguna" required>
                          </div></div>
 <script>
   function Angka(evt) {
     var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

       return false;
     return true;
   }
 </script>

<div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-6">
                              <input id="password" type="password" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" name="sandi" required>
                          </div></div>	

                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                          <div class="col-sm-6">
                              <input id="password_two" type="password" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan Password Yang Sama' : '');" placeholder="Konfirmasi Password" name="sandi2" required>
                          </div></div>	 

						  <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6" class="center">
                            <input type="text" class="form-control" placeholder="Nama" name="nama" required></pre>
						  </div></div>	

						  <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-6" class="center">
                            <input type="email" class="form-control" placeholder="Email" name="email" required></pre>
						  </div></div>
						  
		<input type="submit" class="btn btn-md btn-success btn-block" name="Daftar">
	</div>
	</form></div>

</body>
</html>
