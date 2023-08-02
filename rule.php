<style>
    /* Add the following CSS rule */
    #dataTables1 {
        margin: 0 auto;
    }
</style>

<?php
$link_data = '?page=rule';
$link_update = '?page=update_rule';

$list_data = '';
$q = "select * from magang order by id_perusahaan";
$result = mysqli_query($con, $q); // Simpan hasil query ke dalam variabel $result

if ($result) { // Periksa apakah query berhasil dieksekusi
    if (mysqli_num_rows($result) > 0) {
        while ($r = mysqli_fetch_array($result)) {
            // Anda dapat melakukan apa pun yang Anda inginkan dengan setiap baris data ($r)
            // Namun, pastikan Anda menggunakannya di dalam loop ini

            $id = $r['id_perusahaan'];
            $kualifikasi = array();
            $qkualifikasi = "select * from rule where id_perusahaan='$id'"; //ambil data kualifikasi dari tabel rule
            $qkualifikasi = mysqli_query($con, $qkualifikasi);
            while ($rkualifikasi = mysqli_fetch_array($qkualifikasi)) { //perulangan untuk menampung data kualifikasi
                $r_kualifikasi = mysqli_fetch_array(mysqli_query($con, "select kode_kualifikasi from kualifikasi where id_kualifikasi='" . $rkualifikasi['id_kualifikasi'] . "'"));
                $kualifikasi[] = $r_kualifikasi['kode_kualifikasi'];
            }
            $daftar_kualifikasi = implode(" - ", $kualifikasi); //satukan data kualifikasi dan tambahkan pemisah "-"
            $list_data .= '
            <tr>
            <td></td>
            <td>' . $r['kode_perusahaan'] . '</td>
            <td>' . $r['nama_perusahaan'] . '</td>
            <td>' . $daftar_kualifikasi . '</td>
            <td>
            <a href="' . $link_update . '&amp;id=' . $id . '&amp;action=edit" class="btn btn-success btn-xs" title="Ubah"><i class="fa fa-edit"></i> Ubah</a> &nbsp;
            <a href="#" data-href="' . $link_update . '&amp;id=' . $id . '&amp;action=delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i> Hapus</a></td>
            </tr>';
        }
    } else {
        // Tidak ada data yang sesuai dengan kondisi
        // Lakukan tindakan yang sesuai jika tidak ada data
    }
} else {
    // Query tidak berhasil dieksekusi, lakukan tindakan yang sesuai dengan kesalahan query
}
?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">DATA ATURAN</h3>
        <div class="box-tools">
            <a href="<?php echo $link_update; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Aturan</a>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Kode Perusahaan</th>
                        <th style="text-align: center;">Nama Perusahaan</th>
                        <th style="text-align: center;">Daftar Kualifikasi</th>
                        <th style="text-align: center;" width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $list_data; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
