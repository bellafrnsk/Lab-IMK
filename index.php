<?php
include ("includes/koneksi.php");

if(isset($_POST['btnlogin']))
{
$user_login=$_POST['NISN'];
$pass_login=$_POST['Password'];

$sql = "SELECT * FROM akun WHERE NISN = '{$nisn_login}' and Password = '{$pass_login}'";
$query = mysqli_query($koneksi, $sql);
$count = mysqli_num_rows($query);

if(!$query){
die("Query gagal " . mysqli_error($koneksi));
}
if(!empty($nisn_login) && (!empty($pass_login))){
if($count==0){
  echo "<font color='white'>NISN/password tidak terdaftar</font><br>";
} else {
while($row = mysqli_fetch_array($query)){
$user = $row['NISN'];
$pass = $row['Password'];
$nama = $row['Nama'];
$email = $row['Email'];
}
}
}else {
if(empty($nisn_login) || empty($pass_login)){
echo "<font color='white'>NISN dan password tidak boleh kosong</font><br>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                          <div class="form-group" class="center">
                            <pre><input type="number" class="form-control" placeholder="NISN" name="NISN" required></pre>
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password" name="Password" required>
                          </div>	
                          <div class="form-group">
                              <button type="submit" class="btn btn-md btn-success btn-block" name="btnlogin">Login</button>
                          </div>
                          <div class="form-group">
                            <h2 class="text-center" style="font-size: 13px;">Belum punya akun? <a href="#">Sign In </a></a></h2>
                        </div>
                        </fieldset>
                          </form>
                      </div>
                  </div>


        
