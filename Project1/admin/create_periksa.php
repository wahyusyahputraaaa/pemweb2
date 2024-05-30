<?php
require_once 'koneksi.php';
$query = 'SELECT * FROM periksa';
$periksas = $dbh->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form create Kondisi pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Tambah Pemeriksaan pasien</h2>
        <form method="POST" class='ms-4 me-4' action="proses_periksa.php">

            <div class="form-group row mt-2">
                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                <div class="col-8">
                    <input id="tanggal" name="tanggal" type="date" required="required" class="form-control">
                </div>
            </div>
    <div class="form-group row mt-2">
        <label for="berat" class="col-4 col-form-label">Berat</label>
        <div class="col-8">
            <input id="berat" name="berat" type="text" required="required"
            class="form-control">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
        <div class="col-8">
            <input id="tinggi" name="tinggi" type="text" required="required"
            class="form-control">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="tensi" class="col-4 col-form-label">Tensi</label>
        <div class="col-8">
            <input id="tensi" name="tensi" type="text" required="required" 
            class="form-control">
        </div>
    </div>
    <div class="form-group row mt-2">
        <label for="keterangan" class="col-4 col-form-label">Keterangan</label>
        <div class="col-8">
            <input id="keterangan" name="keterangan" type="text" required="required"
            class="form-control">
        </div>
    </div>
    <div class="form-group row mt-2">
    <label for="pasien_id" class="col-4 col-form-label">Pasien</label>
    <div class="col-8">
        <select class="form-control" id="pasien_id" name="pasien_id" required>
                                            <option value="">Pilih Pasien</option>
                                            <?php
                                            $sql = "SELECT * FROM pasien";
                                            $stmt = $dbh->prepare($sql);
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            foreach ($result as $pass) {
                                                echo "<option value='$pass[id_pasien]'>$pass[nama]</option>";
                                            }
                                            ?>
        </select>
        </div>
    </div>
    <div class="form-group row mt-2">
    <label for="dokter_id" class="col-4 col-form-label">dokter</label>
        <div class="col-8">
        <select class="form-control" id="dokter_id" name="dokter_id" required>
                            <?php
                            $sql_dokter_id = "SELECT * FROM paramedik";
                            $stmt_dokter_id = $dbh->prepare($sql_dokter_id);
                            $stmt_dokter_id->execute();
                            $result_dokter_id = $stmt_dokter_id->fetchAll();
                            foreach ($result_dokter_id as $dokter_id) {
                                $selected = ($data['dokter_id'] == $dokter_id['id']) ? 'selected' : '';
                                echo "<option value='{$dokter_id['id']}' $selected>{$dokter_id['nama']}</option>";
                            }
                            ?>
                        </select>
        </div>
    </div>
    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <button name="proses_periksa" type="submit" value='tambah_periksa' class="btn btn-primary">Tambah</button>
        </div>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script
</body>

</html>
