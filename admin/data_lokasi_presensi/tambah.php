<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:../../auth/login.php?pesan=belum_login");
} else if ($_SESSION["role"] != 'admin') {
    header("location:../../auth/login.php?pesan=tolak_akses");
}

$judul = "Tambah Lokasi Presensi";
include('../layout/header.php');
require_once('../../config.php');



?>



<div class="page-body">
    <div class="container-xl">


    </div>
</div>