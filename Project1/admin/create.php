<?php
require_once 'koneksi.php';
$query = 'SELECT * FROM kelurahan';
$kelurahans = $dbh->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Create Data Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2>Daftar Pasien</h2>
    <form method="POST" class='ms-4 me-4' action="proses.php">
      <div class="form-group row ">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
          <input id="kode" name="kode" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <input id="nama" name="nama" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
          <input id="tmp_lahir" name="tmp_lahir" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
          <input id="tgl_lahir" name="tgl_lahir" type="date" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
          <div class='form-check form-check-inline'>
            <input id="gender_pria" name="gender" type="radio" required="required" class="form-check-input"
              value="pria">
            <label for="gender_pria" class="form-check-label">Pria</label>
          </div>
          <div class='form-check form-check-inline'>
            <input id="gender_wanita" name="gender" type="radio" required="required" class="form-check-input"
              value="wanita">
            <label for="gender_wanita" class="form-check-label">Wanita</label>
          </div>
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <input id="email" name="email" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
          <input id="alamat" name="alamat" type="text" required="required" class="form-control">
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="kelurahan_id" class="col-4 col-form-label">Kelurahanid</label>
        <div class="col-8">
          <select id="kelurahan_id" name="kelurahan_id" class="form-select" required="required">
            <option value="">Pilih Kelurahan</option>
            <?php foreach($kelurahans as $kelurahan){?>
              <option value="<?= $kelurahan['id_kelurahan'];?>"><?= $kelurahan['nama'];?></option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="form-group row mt-2">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value='tambah' class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>