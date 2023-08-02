<?php
$link_konsultasi = '?page=konsultasi';

function arrays_are_equal($array1, $array2)
{
    array_multisort($array1);
    array_multisort($array2);
    return (serialize($array1) === serialize($array2));
}

if (isset($_POST['proses'])) {

    $id_pengguna = isset($_SESSION['LOG_USER']) ? $_SESSION['LOG_USER'] : '';
    $tanggal = date('Y-m-d');

    // -------- forward chaining --------------
    // --------------------- START ------------------------
    $arr_kualifikasi_terpilih = array();
    $list_data = '';
    $no = 0;

    for ($i = 0; $i < count($_POST['kualifikasi']); $i++) {
        $kualifikasi = $_POST['kualifikasi'][$i];
        $arr_kualifikasi_terpilih[] = $kualifikasi;
        $rkualifikasi = mysqli_fetch_array(mysqli_query($con, "SELECT kode_kualifikasi,nama_kualifikasi FROM kualifikasi where id_kualifikasi = " . $kualifikasi));
        $list_data .= '
        <tr>
            <td>' . ++$no . '</td>
            <td>' . $rkualifikasi['kode_kualifikasi'] . ' - ' . $rkualifikasi['nama_kualifikasi'] . '</td>
        </tr>
        ';
    }

    $id_perusahaan_hasil = '';
    $nama_perusahaan_hasil = '';
    $sql1 = mysqli_query($con, "select id_perusahaan,nama_perusahaan from magang order by id_perusahaan");
    while ($r = mysqli_fetch_array($sql1)) {
        $id_perusahaan = $r['id_perusahaan'];
        $nama_perusahaan = $r['nama_perusahaan'];
        $arr_kualifikasi_perusahaan = array();
        $sql_at = mysqli_query($con, "select id_kualifikasi from rule where id_perusahaan='$id_perusahaan' order by id_kualifikasi");
        while ($r_at = mysqli_fetch_array($sql_at)) {
            $id_kualifikasi = $r_at['id_kualifikasi'];
            $arr_kualifikasi_perusahaan[] = $id_kualifikasi;
        }
        if (arrays_are_equal($arr_kualifikasi_terpilih, $arr_kualifikasi_perusahaan)) {
            $id_perusahaan_hasil = $id_perusahaan;
            $nama_perusahaan_hasil = $nama_perusahaan;
        }
    }

    if ($nama_perusahaan_hasil != '') {
        $q = "insert into riwayat(id_pengguna,id_perusahaan,tanggal) values ('" . $id_pengguna . "','" . $id_perusahaan_hasil . "','" . $tanggal . "')";
        mysqli_query($con, $q);
    } else {
        $nama_perusahaan_hasil = '<b>Tidak Ada Perusahaan Yang Sesuai Dengan Kualifikasi Terpilih</b>';
        $q = "insert into riwayat(id_pengguna,tanggal) values ('" . $id_pengguna . "','" . $tanggal . "')";
        mysqli_query($con, $q);
    }
    // --------------------- END -------------------------

    $tbl_hasil = '';
    $tbl_hasil .= '
        <tr>
            <td width="120">Nama perusahaan</td>
            <td>' . $nama_perusahaan_hasil . '</td>
        </tr>
        ';

    if (!empty($id_perusahaan_hasil)) {
        $rmagang = mysqli_fetch_array(mysqli_query($con, "select * from magang where id_perusahaan='" . $id_perusahaan_hasil . "'"));
        $tbl_hasil = '
		<tr>
			<td width="120">Nama Perusahaan</td>
			<td><strong>' . $rmagang['kode_perusahaan'] . ' - ' . $rmagang['nama_perusahaan'] . '</strong></td>
		</tr>
		<tr>
			<td>Posisi Magang</td>
			<td style="white-space: pre-wrap; word-wrap: break-word;">' . $rmagang['posisi_magang'] . '</td>
		</tr>
        <tr>
            <td>Keterangan</td>
            <td style="white-space: pre-wrap; word-wrap: break-word;">' . $rmagang['keterangan'] . '</td>
        </tr>
		';
    }


?>
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">HASIL KONSULTASI</h3>
        </div>
        <div class="box-body">
            <div class='table-responsive'>
                <table class='table table-striped table-bordered'>
                    <thead>
                        <tr>
                            <th width="40">No</th>
                            <th>Kualifikasi yang dipiilh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $list_data; ?>
                    </tbody>
                </table>
            </div>
            <h3 class="page-header">REKOMENDASI</h3>
            <div class='table-responsive'>
                <table class='table table-bordered'>
                    <tbody>
                        <?php echo $tbl_hasil; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box-footer">
            <div class="text-center col-sm-12">
                <a href="<?php echo $link_konsultasi; ?>" class="btn btn-primary">Ulangi Konsultasi</a> &nbsp;
            </div>
        </div>
    </div>
<?php } ?>