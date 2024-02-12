<?php

session_start();
if (!isset($_SESSION['login'])) {
    header("location:../../auth/login.php?pesan=belum_login");
} else if ($_SESSION["role"] != 'pegawai') {
    header("location:../../auth/login.php?pesan=tolak_akses");
}
include("../layout/header.php");

include_once("../../config.php");

if (isset($_POST['tombol_masuk'])) {
    $latitude_pegawai = (float)$_POST['latitude_pegawai'];
    $longitude_pegawai = (float)$_POST['longitude_pegawai'];
    $latitude_kantor = (float)$_POST['latitude_kantor'];
    $longitude_kantor = (float)$_POST['longitude_kantor'];
    $radius = $_POST['radius'];
    $zona_waktu = $_POST['zona_waktu'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $jam_masuk = $_POST['jam_masuk'];
}

$perbedaan_koordinat = deg2rad($longitude_pegawai - $longitude_kantor);
$jarak = sin(deg2rad($latitude_pegawai)) * sin(deg2rad($latitude_kantor)) + cos(deg2rad($latitude_pegawai)) * cos(deg2rad($latitude_kantor)) * cos($perbedaan_koordinat);
$jarak = acos($jarak);
$jarak = rad2deg($jarak);
$mil = $jarak * 60 * 1.1515;
$jarak_km = $mil * 1.609344;
$jarak_meter = $jarak_km * 1000;

echo $jarak_meter;
