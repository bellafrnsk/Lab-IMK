<?php
	require_once 'koneksi.php';
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub Belajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
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
	<!DOCTYPE html>
<body>
	
    <div class="jumbotron" style="margin-bottom:0px; color: rgb(255, 255, 255); background-color: darkgreen;">
<h2 class="text-center" style="font-size: 50px; font-weight: 600;">Klub Belajar</h2>
<h5 class="text-center" style="font-size: 20px; font-weight: 600;">SMA Harapan Bangsa</h5>
    </div>
    
    <div class="container">
        <br><h5 class="text-center" style="font-size: 30px; font-weight: 600;">Lengkapi Data Anda</h5>
        <form>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" placeholder="NISN" name="NISN" required>
          </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">NIS</label>
            <div class="col-sm-6">
              <input type="number" class="form-control" placeholder="NISN" name="NISN" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" placeholder="Email" id="inputPassword">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-md-3 mb-3">
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">X MIPA 1</option>
                  <option>X MIPA 2</option>
                  <option>X MIPA 3</option>
                  <option>XI MIPA 1</option>
                  <option>XI MIPA 2</option>
                  <option>XI MIPA 3</option>
                  <option>XII MIPA 1</option>
                  <option>XII MIPA 2</option>
                  <option>XII MIPA 3</option>
                  <option>X IPS 1</option>
                  <option>X IPS 2</option>
                  <option>X IPS 3</option>
                  <option>XI IPS 1</option>
                  <option>XI IPS 2</option>
                  <option>XI IPS 3</option>
                  <option>XII IPS 1</option>
                  <option>XII IPS 2</option>
                  <option>XII IPS 3</option>
                </select>
              </div>
        </div>

          <fieldset class="form-group">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Perempuan
                  </label>
                </div>
              </div>
            </div>
          </fieldset>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-6">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-md-3 mb-3">
                <select multiple class="form-control" id="exampleFormControlSelect2">
                  <option>Islam</option>
                  <option>Kristen</option>
                  <option>Khatolik</option>
                  <option>Hindu</option>
                  <option>Budha</option>
                  <option>dll</option>
                </select>
              </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Klub</label>
            <div class="col-md-3 mb-3">
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">Matematika</option>
                  <option>Fisika</option>
                  <option>Kimia</option>
                  <option>Biologi</option>
                  <option>Ekonomi</option>
                  <option>Astronomi</option>
                  <option>Geografi</option>
                </select>
              </div>
        </div>
       
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-md-3 mb-3">
                <select class="custom-select" id="validationCustom04" required>
                  <option selected disabled value="">Ketua</option>
                  <option>Wakil Ketua</option>
                  <option>Sekretaris</option>
                  <option>Bendahara</option>
                  <option>Anggota</option>
                </select>
              </div>
        </div>
      </form>
    </div>
    </body>
    </html>
</body>
</html>