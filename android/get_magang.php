<?php
include '../koneksi.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$response = array();

if (isset($input['id_perusahaan'])) {

    $id_perusahaan = $input['id_perusahaan'];

    $q = mysqli_query($con, "SELECT kode_perusahaan,nama_perusahaan,posisi_magang,keterangan FROM perusahaan WHERE id_perusahaan='$id_perusahaan'");
    $r = mysqli_fetch_array($q);

    $response["status"] = 0;
    $response["message"] = "Get perusahaan berhasil";
    $response["kode_perusahaan"] = $r['kode_perusahaan'];
    $response["nama_perusahaan"] = $r['nama_perusahaan'];
    $response["posisi_magang"] = $r['posisi_magang'];
    $response["keterangan"] = $r['keterangan'];
} else {
    $response["status"] = 2;
    $response["message"] = "Parameter ada yang kosong";
}
echo json_encode($response);
