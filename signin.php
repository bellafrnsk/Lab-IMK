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
        <br><h5 class="text-center" style="font-size: 30px; font-weight: 600;">Sign In</h5>
        <div class="col-md-8 col-md-offset-8">
                          <form method = "post">
                          <fieldset>     
                          <br><br><br>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-6" class="center">
                            <input type="number" class="form-control" placeholder="NISN" name="NISN" required></pre>
                          </div></div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6" class="center">
                            <input type="text" class="form-control" placeholder="Nama" name="Nama" required></pre>
                          </div></div>
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-6">
                          <input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
                          </div></div>	
                          <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                          <div class="col-sm-6">
                          <input id="password_two" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Masukkan Password Yang Sama' : '');" placeholder="Konfirmasi Password" required>
                        </div></div>	
                          <div class="form-group">
                              <button type="submit" class="btn btn-md btn-success btn-block" style=>Sign In</button>
                          </div>
                        </fieldset>
                          </form>
                      </div>
                  </div>
</body>
</html>
