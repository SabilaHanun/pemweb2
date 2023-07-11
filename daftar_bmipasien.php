<?php

require_once "class_bmipasien.php";

session_start();

if(isset($_POST['hapus_data'])) {
  unset($_SESSION['data_pasien']);
}

if(isset($_SESSION['data_pasien'])) {
  $dataPasien = $_SESSION['data_pasien'];
} else {
  $dataPasien = array();
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
      width: 70%;
    }
    </style>

  </head>
  <body>

    <div class="centered">
      <div class="row">
        <div class="col-12">
        <a class="btn btn-primary" href='form_bmipasien.php'>Tambah Daftar BMI</a>
          <h3 class="text-center">Data BMI Pasien</h3>
          <table class="table" border="1">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan (kg)</th>
                <th>Tinggi Badan (cm)</th>
                <th>BMI</th>
                <th>Status BMI</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $number = 1;
                foreach($dataPasien as $key => $pasien) {
                  $bmi = $pasien->hasilBMI();
                  $status = $pasien->statusBMI();
              ?>

              <tr 
              <?php if($status == "Kekurangan berat badan") { ?> style="background-color: #fcf8e3;" <?php } elseif($status == "Berat Normal (Ideal)") { ?> style="background-color: #dff0d8;" <?php } elseif($status == "Kelebihan berat badan") { ?> style="background-color: orange;" <?php } else { ?> style="background-color: #f2dede;" <?php } ?>>
                <td><?= $number++ ?></td>
                <td><?= $pasien->nama ?></td>
                <td><?= $pasien->umur ?></td>
                <td><?= $pasien->jenisKelamin ?></td>
                <td><?= $pasien->berat ?></td>
                <td><?= $pasien->tinggi ?></td>
                <td><?= $bmi ?></td>
                <td><?= $status ?></td>
              </tr>

              <?php
                }
              ?>
            </tbody>
          </table>
          <form method="post">
            <input type="submit" name="hapus_data" value="Clear Data">
          </form>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>