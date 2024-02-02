<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = 17081945;
$db_name = "presensi";


$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
    echo "connection gagal" . mysqli_connect_error();
}

function base_url($url = null)

{
    $base_url = "http://localhost:9000";

    if ($url != null) {
        return $base_url . '/' . $url;
    } else {
        return $base_url;
    }
}


