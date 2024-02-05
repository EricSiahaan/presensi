<?php
session_start();
ob_start();
if (!isset($_SESSION['login'])) {
    header("location:../../auth/login.php?pesan=belum_login");
} else if ($_SESSION["role"] != 'admin') {
    -header("location:../../auth/login.php?pesan=tolak_akses");
}

$judul = "Tambah Lokasi Presensi";
include('../layout/header.php');
require_once('../../config.php');

if (isset($_POST['submit'])) {
    $nama_lokasi = htmlspecialchars($_POST['nama_lokasi']);
    $alamat_lokasi = htmlspecialchars($_POST['alamat_lokasi']);
    $tipe_lokasi = htmlspecialchars($_POST['tipe_lokasi']);
    $latitude = htmlspecialchars($_POST['latitude']);
    $longitude = htmlspecialchars($_POST['longitude']);
    $radius = htmlspecialchars($_POST['radius']);
    $zona_waktu = htmlspecialchars($_POST['zona_waktu']);
    $jam_masuk = htmlspecialchars($_POST['jam_masuk']);
    $jam_pulang = htmlspecialchars($_POST['jam_pulang']);


<<<<<<< HEAD
    $result = mysqli_query($connection, "INSERT INTO lokasi_presensi(nama_lokasi, alamat_lokasi, tipe_lokasi, latitude, longitude, radius, zona_waktu, jam_masuk, jam_pulang) VALUES
    ('$nama_lokasi', '$alamat_lokasi', '$tipe_lokasi', '$latitude', '$longitude', '$radius', '$zona_waktu', '$jam_masuk','$jam_pulang')
    ");

    $_SESSION['berhasil'] = 'Data Berhasil Di simpan';
    header("Location: lokasi_presensi.php");
    exit;
}
=======
>>>>>>> 1816806bfa96d34ecbeaef182c8dfe7f8ec28871

?>



<div class="page-body">
    <div class="container-xl">

        <div class="card col-md-6">
            <div class="card-body">
<<<<<<< HEAD
                <form action="<?= base_url('admin/data_lokasi_presensi/tambah.php') ?>" method="POST">
                    <div class="mb-3">
                        <label for="">Nama Lokasi</label>
                        <input type="text" class="form-control" name="nama_lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="">Alamat Lokasi</label>
                        <input type="text" class="form-control" name="alamat_lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="">Tipe Lokasi</label>
                        <input type="text" class="form-control" name="tipe_lokasi">
                    </div>

                    <div class="mb-3">
                        <label for="Tipe Lokasi">Tipe Lokasi </label>
                        <select name="tipe_lokasi" class="form-control">
                            <option value="">--Pilih Tipe Lokasi--</option>
                            <option value="Pusat">Pusat</option>
                            <option value="Cabang">Cabang</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Latitude</label>
                        <input type="text" class="form-control" name="latitude">
                    </div>
                    <div class="mb-3">
                        <label for="">Longitude</label>
                        <input type="text" class="form-control" name="longitude">
                    </div>
                    <div class="mb-3">
                        <label>Radius</label>
                        <input type="number" class="form-control" name="radius">
                    </div>
                    <div class="mb-3">
                        <label>Zona Waktu</label>
                        <select name="zona_waktu" class="form-control">
                            <option value="">--Pilih Zona Waktu--</option>
                            <option value="WIB">WIB</option>
                            <option value="WITA">WITA</option>
                            <option value="WIT">WIT</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jam Masuk</label>
                        <input type="time" class="form-control" name="jam_masuk">
                    </div>
                    <div class="mb-3">
                        <label>Jam Pulang</label>
                        <input type="time" class="form-control" name="jam_pulang">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>
            </div>
        </div>