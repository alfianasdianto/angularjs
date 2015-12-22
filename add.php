<?php
header("Access-Control-Allow-Origin: *");

$host = "localhost";
$user = "root";
$pass = "";
$db = "angular";

$link = mysqli_connect($host, $user, $pass, $db) or (mysqli_error($link));

// terima input data
$data = json_decode(file_get_contents("php://input"));

// ambil nilai dari nama dan kota
$nama = $data->nama;
$kota = $data->kota;

//query insert
$sql = "INSERT INTO users (nama, kota) VALUES ('$nama', '$kota')";

//echo pesan
if(mysqli_query($link, $sql)){
    $pesan = "input berhasil";
} else{
    $pesan = "input gagal";
}

echo $pesan;