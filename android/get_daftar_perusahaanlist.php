<?php
include '../koneksi.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$response = array();

$q = mysqli_query($con, "SELECT id_perusahaan,nama_perusahaan FROM perusahaan GROUP BY nama_perusahaan ORDER BY id_perusahaan");

$response["perusahaan"] = array();
while ($r = mysqli_fetch_array($q)) {
    $magang = array();
    $magang ["id_perusahaan"] = $r['id_perusahaan'];
    $magang ["nama_perusahaan"] = $r['nama_perusahaan'];
    array_push($response["perusahaan"], $perusahaan);
}
$response["status"] = 0;
$response["message"] = "Get list perusahaan berhasil";

echo json_encode($response);
