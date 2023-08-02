<?php
$link_data = '?page=riwayat';
$link_update = '?page=update_riwayat';

$list_data = '';
$q = "select * from riwayat order by id_riwayat DESC";
$q = mysqli_query($con, $q);
$no = 0;
if (mysqli_num_rows($q) > 0) {
    while ($r = mysqli_fetch_array($q)) {
        $no++;
        $id = $r['id_riwayat'];
        
            $r_user = mysqli_fetch_array(mysqli_query($con, "select nama_lengkap from user where id_pengguna='" . $r['id_pengguna'] . "'"));
        if (is_null($r['id_pengguna'])) {
            $nama_perusahaan = 'perusahaan tidak terdeteksi';

        } else {
            $r_magang = mysqli_fetch_array(mysqli_query($con, "select nama_perusahaan from magang where id_perusahaan='" . $r['id_perusahaan'] . "'"));
        
            // Periksa apakah $r_magang adalah array dan elemen 'nama_perusahaan' ada sebelum mengaksesnya
            if (isset($r_magang['nama_perusahaan'])) {
                $nama_perusahaan = $r_magang['nama_perusahaan'];
            } else {
                // Atau berikan nilai default jika tidak ada data yang sesuai
                $nama_perusahaan = 'Nama Perusahaan Tidak Ditemukan';
            }
        }
        
        $list_data .= '
		<tr>
		<td>' . $no . '</td>
		<td>' . date('d-m-Y', strtotime($r['tanggal'])) . '</td>
		<td>' . $r_user['nama_lengkap'] . '</td>
		<td>' . $nama_perusahaan . '</td>
		<td>
            <a href="#" data-href="' . $link_update . '&amp;id=' . $id . '&amp;action=delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
        </td>
		</tr>';
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">DATA RIWAYAT USER</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama User</th>
                        <th>Nama perusahaan</th>
                        <th width="80">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                	<button class="btn btn-primary" onclick="window.print()"><i class="fa fa-print"> Cetak</i></button>
                	
                    <?php echo $list_data; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
