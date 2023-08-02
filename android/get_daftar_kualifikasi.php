<?php
include '../koneksi.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$response = array();

$q = mysqli_query($con, "SELECT id_kualifikasi,ket_kualifikasi FROM kualifikasi ORDER BY id_kualifikasi");

$response["kualifikasi"] = array();
while ($r = mysqli_fetch_array($q)) {
    $kualifikasi = array();
    $kualifikasi["id_kualifikasi"] = $r['id_kualifikasi'];
    $kualifikasi["ket_kualifikasi"] = $r['ket_kualifikasi'];
    array_push($response["kualifikasi"], $kualifikasi);
}
$response["status"] = 0;
$response["message"] = "Get list kualifikasi berhasil";

echo json_encode($response);
