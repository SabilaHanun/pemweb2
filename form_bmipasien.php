<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
    <h1 class="text-center mb-4">Form Isian BMI</h1>
      <form action="hasil_bmipasien.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="bi bi-person-circle"></i>
                </div>
                </div> 
                <input name="nama" type="text" class="form-control" required>
            </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="bi bi-speedometer2"></i>
                </div>
                </div> 
                <input type="number" name="berat" class="form-control" required> 
                <div class="input-group-append">
                <div class="input-group-text">Kg</div>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="bi bi-rulers"></i>
                </div>
                </div> 
                <input type="number" name="tinggi" class="form-control" required> 
                <div class="input-group-append">
                <div class="input-group-text">cm</div>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-4 col-form-label">Umur</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="bi bi-balloon-fill"></i>
                </div>
                </div> 
                <input type="number" name="umur" class="form-control" required> 
                <div class="input-group-append">
                <div class="input-group-text">Thn</div>
                </div>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="input-group">
                <select class="form-control" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>