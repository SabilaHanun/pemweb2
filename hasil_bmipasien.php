<?php
require_once "class_bmipasien.php";

session_start();

$nama = $_POST["nama"];
$umur = $_POST["umur"];
$jenisKelamin = $_POST["jenis_kelamin"];
$berat = $_POST["berat"];
$tinggi = $_POST["tinggi"];

$pasien = new BmiPasien();
$pasien->nama = $nama;
$pasien->umur = $umur;
$pasien->jenisKelamin = $jenisKelamin;
$pasien->berat = $berat;
$pasien->tinggi = $tinggi;

$bmi = $pasien->hasilBMI();
$status = $pasien->statusBMI();

if(isset($_SESSION['data_pasien'])) {
  array_push($_SESSION['data_pasien'], $pasien);
}
else {
  $_SESSION['data_pasien'] = array($pasien);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
      .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    </style>

  </head>
  <body>

    <div class="centered">
      <div class="row">
        <div class="col">
          <h3 class="text-center">Hasil Evaluasi BMI</h3>
          <table class="table" border="1">
            <tr>
              <td>Nama</td>
              <td class="px-0">:</td>
              <td><?= "{$pasien->nama} ($pasien->jenisKelamin)" ?></td>
            </tr>
            <tr>
              <td>Berat / Tinggi Badan</td>
              <td class="px-0">:</td>
              <td><?= "{$pasien->berat}kg / {$pasien->tinggi}cm" ?></td>
            </tr>
            <tr>
              <td>Umur</td>
              <td class="px-0">:</td>
              <td><?= "{$pasien->umur} Tahun" ?></td>
            </tr>
            <tr>
              <td>BMI</td>
              <td class="px-0">:</td>
              <td><?= "{$bmi}" ?></td>
            </tr>
            <tr>
              <td>Umur</td>
              <td class="px-0">:</td>
              <td><?= "{$status}" ?></td>
            </tr>
          </table>
          <a class="btn btn-primary" href='daftar_bmipasien.php'>Lihat Daftar BMI Pasien</a>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>