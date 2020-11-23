<?php
include ("koneksi.php");

if(isset($_POST['btnlogin']))
{
	$user_login=$_POST['pengguna'];
	$pass_login=$_POST['sandi'];

	$sql = "SELECT * FROM akun WHERE NISN = '{$user_login}' and Password ='{$pass_login}'";
	$query = mysqli_query($koneksi,$sql);
	$count = mysqli_num_rows($query);

	if(!$query){
		die("Query gagal" .mysqli_error($koneksi));
	}
	if (!empty($user_login) && (!empty($pass_login))){
		if ($count==0){
			echo "NISN tidak ditemukan";
		} else {
			while ($row = mysqli_fetch_array($query)){
				$user = $row ['NISN'];
				$pass = $row['Password'];
				$nama = $row['Nama'];
			}
			if($user_login == $user && $pass_login == $pass){
				echo "<script> alert('Anda Sukses Login'); </script>";
        echo "<script>location='profil_login.php';</script>";
				$_SESSION['NISN'] = $user;
				$_SESSION['Nama'] = $nama;
			} else {
				echo "NISN tidak ditemukan";
			}
		}
	}
	else {
		if(empty($user_login) || empty($pass_login)){
			echo "NISN atau Password tidak boleh kosong";
		}
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Belajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="jumbotron" style="margin-bottom:0px; color: rgb(255, 255, 255); background-color: darkgreen;">
<h2 class="text-center" style="font-size: 50px; font-weight: 600;">Klub Belajar</h2>
<h5 class="text-center" style="font-size: 20px; font-weight: 600;">SMA Harapan Bangsa</h5>
    </div>


    <div class="container">
        <div class="col-md-6 col-md-offset-6">
                          <form method = "post">
                          <fieldset>     
                          <br><br><br>
						  <div class="form-group">
      <input type="text" onkeypress="return Angka(event)" class="form-control"placeholder="NISN" name="pengguna" required>
                          </div>
 <script>
   function Angka(evt) {
     var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

       return false;
     return true;
   }
</script>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password" name="sandi" required>
                          </div>	
                          <div class="form-group">
                              <button type="submit" class="btn btn-md btn-success btn-block" name="btnlogin">Login</button>
                          </div>
                          <div class="form-group">
                            <h2 class="text-center" style="font-size: 13px;">Belum punya akun? <a href="signin.php">Sign In </a></a></h2>
                        </div>
                        </fieldset>
                          </form>
                      </div>
                  </div>


        
