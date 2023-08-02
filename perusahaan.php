<style>
    /* Add the following CSS rule */
    #dataTables1 {
        margin: 0 auto;
    }
</style>

<?php
$link_data = '?page=magang';
$link_update = '?page=update_magang';

$list_data = '';
$q = "select * from magang order by id_perusahaan desc";
$q = mysqli_query($con, $q);
if (mysqli_num_rows($q) > 0) {
 while ($r = mysqli_fetch_array($q)) {
 $id = $r['id_perusahaan'];
 $list_data .= '
		<tr>
        <td></td>
            <td>' . $r['kode_perusahaan'] . '</td>
            <td>' . $r['nama_perusahaan'] . '</td>
            <td>' . $r['posisi_magang'] . '</td>
            <td>' . $r['keterangan'] . '</td>
            <td>
             
             <a href="#" data-href="' . $link_update . '&amp;id=' . $id . '&amp;action=delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
            </td>
		</tr>';
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">DATA PERUSAHAAN</h3>
        <div class="box-tools">
            <a href="<?php echo $link_update; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Perusahaan</a>
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
                        <th style="text-align: center;">Posisi Magang</th>
                        <th style="text-align: center;">Keterangan</th>
                        <th style="text-align: center;" width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $list_data; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
