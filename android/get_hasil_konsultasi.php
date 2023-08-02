<?php
include '../koneksi.php';

$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE);
$response = array();

if (isset($input['hasil']) && isset($input['id_pengguna'])) {

    $hasil = $input['hasil'];
    $id_pengguna = $input['id_pengguna'];
    $tanggal = date('Y-m-d');

    $hsl = explode("#", $hasil);
    $arr_kualifikasi_terpilih = array();

    foreach ($hsl as $val) {
        $q2 = mysqli_query($con, "select id_kualifikasi from kualifikasi where ket_kualifikasi='$val'");
        if (mysqli_num_rows($q2) > 0) {
            $r2 = mysqli_fetch_array($q2);
            $id_kualifikasi = $r2['id_kualifikasi'];
            $arr_kualifikasi_terpilih[] = $id_kualifikasi;
        }
    }

    $id_perusahaan_hasil = '';
    $nama_perusahaan_hasil = '';
    $sql1 = mysqli_query($con, "select id_perusahaan,nama_perusahaan from perusahaan order by id_perusahaan");
    while ($r = mysqli_fetch_array($sql1)) {
        $id_perusahaan = $r['id_perusahaan'];
        $nama_perusahaan = $r['nama_perusahaan'];
        $arr_kualifikasi_perusahaan = array();
        $sql_at = mysqli_query($con, "select id_kualifikasi from rule where id_kualifikasi='$id_kualifikasi' order by id_kualifikasi");
        while ($r_at = mysqli_fetch_array($sql_at)) {
            $id_kualifikasi = $r_at['id_kualifikasi'];
            $arr_kualifikasi_perusahaan[] = $id_kualifikasi;
        }
        if (arrays_are_equal($arr_kualifikasi_terpilih, $arr_kualifikasi_perusahaan)) {
        // if (!array_diff($arr_kualifikasi_terpilih, $arr_kualifikasi_perusahaan)) {
            $id_perusahaan_hasil = $id_perusahaan;
            $nama_perusahaan_hasil = $nama_perusahaan;
        }
    }

    if ($nama_perusahaan_hasil != '') {
        $q = "insert into riwayat(id_pengguna,id_perusahaan,tanggal) values ('" . $id_pengguna . "','" . $id_perusahaan_hasil . "','" . $tanggal . "')";
        mysqli_query($con, $q);
    } else {
        $nama_perusahaan_hasil = 'Tidak ada jenis perusahaan yang sesuai dengan kualifikasi terpilih';
        $q = "insert into riwayat(id_pengguna,tanggal) values ('" . $id_pengguna . "','" . $tanggal . "')";
        mysqli_query($con, $q);
    }

    $response["status"] = 0;
    $response["id_perusahaan"] = $id_perusahaan_hasil;
    $response["nama_perusahaan"] = $nama_perusahaan_hasil;
} else {
    $response["status"] = 2;
    $response["message"] = "Parameter ada yang kosong";
}

function arrays_are_equal($array1, $array2)
{
    array_multisort($array1);
    array_multisort($array2);
    return (serialize($array1) === serialize($array2));
}

echo json_encode($response);
