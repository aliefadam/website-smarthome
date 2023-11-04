<?php

if (isset($_POST['kulkas'])) {
    $kulkas = "1";
} else {
    $kulkas = "0";
}

if (isset($_POST['suhu'])) {
    $suhu = "1";
} else {
    $suhu = "0";
}

if (isset($_POST['ac'])) {
    $ac = "1";
} else {
    $ac = "0";
}

if (isset($_POST['lampu'])) {
    $lampu = "1";
} else {
    $lampu = "0";
}

if (isset($_POST['ac'])) {
    $ac = "1";
} else {
    $ac = "0";
}

if (isset($_POST['pintu'])) {
    $pintu = "1";
} else {
    $pintu = "0";
}

if (isset($_POST['music'])) {
    $music = "1";
} else {
    $music = "0";
}

if (isset($_POST['router'])) {
    $router = "1";
} else {
    $router = "0";
}

if (isset($_POST['gerbang'])) {
    $gerbang = "1";
} else {
    $gerbang = "0";
}


$nama_file_baru = 'lamiacasa_devices.jpg';
$nama_file = "$kulkas$suhu$ac$lampu$pintu$music$router$gerbang";


$folder_gambar = 'download/';
$file_path = $folder_gambar . $nama_file . '.jpg';

if (file_exists($file_path)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $nama_file_baru . '"');
    header('Content-Length: ' . filesize($file_path));

    readfile($file_path);
    exit;
} else {
    echo 'File tidak ditemukan.';
}

?>