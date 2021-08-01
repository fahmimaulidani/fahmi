<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Bioata MABA UIM</title>
  </head>
  <body>
  <!-- navbar -->
  
 
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div> -->
  </div>
  </div>
</nav>
  <!-- endnavbar -->
  <!-- jumbotron -->
  <img src="image/UIM.png " class="rounded float-left" alt="...">
  <img src="image/UIM.Png" class="rounded float-right" alt="...">  
  <div class="jumbotron jumbotron-fluid bg-success">
  <div class="container" align="center"> 
    <h1 class="display-4 font-weight-bold text-light">BIODATA MAHASISWA BARU</h1>
    <h3 class="lead font-weight-bold text-light">UNIVERSITAS ISLAM MADURA</h3>
  </div>
</div>
  <!-- end jumbotron -->
<!-- menu -->
<div class="continer bg-warning">
<!-- <b><p align="center">BIODATA MAHASISWA BARU</b>
<b><br>UNIVERSITAS ISLAM MADURA</b></p></br> <hr> -->
<form method="post" action="proses_biodata.php"? align="center">
<b>Nama Lengkap</b>  <br><input type="textbox" id="Nama" name="Nama"></br>
<b>NIM/NPM</b>          <br><input type="textbox" id="Nim" name="Nim"></br>
<b>Fakultas</b>         <br><input type="textbox" id="Fakultas" name="Fakultas"></br>
<b>Prodi</b>            <br><input type="textbox" id="Prodi" name="Prodi"></br>
<b>Tempat Lahir</b>     <br><input type="textbox" id="TempatLahir" name="TempatLahir"></br>
<b>Tanggal Lahir</b>    <br><input type="date" id="TanggalLahir" name="TanggalLahir"></br>
<b>Alamat</b>           <br><textarea rows="5" cols="60" id="Alamat" name="Alamat"></textarea></br>
<b>Jenis Kelamin</b>    <br>
                <select name="sex">
                <option value="laki-laki">Laki-Laki <br> </option>
                <option value="Perempuan">Perempuan <br> </option>
                </select><br>
<b>Agama</b>           <br>
                <input type="radio" id="agama" name="agama" value="Islam">Islam <br>
                <input type="radio" id="agama" name="agama" value="Kristen">Kristen <br>
                <input type="radio" id="agama" name="agama" value="Katolik">Katolik <br>
                <input type="radio" id="agama" name="agama" value="Hindu">Hindu <br>
                <input type="radio" id="agama" name="agama" value="Buddha">Buddha <br>
<b>Nomor Telepon</b>    <br><input type="textbox" id="NomorTelepon" name="NomorTelepon"></br>
<!-- <input type="submit" name="submit" value="Simpan"> <input type="reset" name="reset" value="Cancel"> -->
<button type="submit" class="btn btn-success">Simpan</button>
<button type="submit" class="btn btn-danger">Cancel</button>
</form>
                

</div>
<!-- end menu -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
