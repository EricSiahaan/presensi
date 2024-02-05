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

        <div class="card col-md-6">
            <div class="card-body">

                <form action="<?= base_url('admin/data_lokasi_presensi/tambah.php') ?>" method="POST">
                    <div class="mb-3">
                        <label for="">Nama Lokasi</label>
                        <input type="text" class="form-control" name="nama_lokasi" value="<?php if (isset($_POST['nama_lokasi']))
                            echo $_POST['nama_lokasi'] ?>">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>