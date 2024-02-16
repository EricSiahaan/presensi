<?php
ob_start();
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../../auth/login.php?pesan=belum_login");
} else if ($_SESSION["role"] != 'pegawai') {
    header("location:../../auth/login.php?pesan=tolak_akses");
}
include("../layout/header.php");

include_once("../../config.php");

$file_foto = $_POST['photo'];

$foto = $file_foto;
$foto = str_replace('date:image/jpeg;base64,', '', $foto);
$foto = str_replace('', '+', $foto);
$data = base64_decode($foto);
$nama_file = 'foto/' . 'masuk' . date('Y-m-d H:i:s') . '.png';
$file = 'masuk' . date('Y-m-d H:i:s') . 'png';
file_put_contents($nama_file)
