<?php
require_once 'koneksi.php';

$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan_id = $_POST['kelurahan_id'];
$_proses = $_POST['proses'];

// simpan data ke array $data

$data =[
    $_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id
];
if ($_proses == 'tambah') {
    $sql = 'INSERT INTO pasien(
        kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES(
        ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);
}elseif ($_proses == 'edit') {
    $id_pasien = $_POST['id'];
    $data[] = $id_pasien;
    $sql = 'UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?,
    email=?, alamat=?, kelurahan_id=? WHERE id_pasien=?';

    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}else{
    $id_pasien = $_GET['id'];
    $sql = "DELETE FROM pasien WHERE id_pasien=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id_pasien]);
}
header('Location: data_pasien.php');
?>