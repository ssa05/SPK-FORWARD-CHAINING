<style>
    /* Add the following CSS rule */
    #dataTables1 {
        margin: 0 auto;
    }
</style>

<?php
$link_data = '?page=kualifikasi';
$link_update = '?page=update_kualifikasi';

$list_data = '';
$q = "select * from kualifikasi order by id_kualifikasi desc";
$q = mysqli_query($con, $q);
if (mysqli_num_rows($q) > 0) {
 while ($r = mysqli_fetch_array($q)) {
 $id = $r['id_kualifikasi'];
 $list_data .= '
		<tr>
            <td></td>
            <td>' . $r['kode_kualifikasi'] . '</td>
            <td>' . $r['nama_kualifikasi'] . '</td>
            <td>
             <a href="' . $link_update . '&amp;id=' . $id . '&amp;action=edit" class="btn btn-success btn-xs" title="Ubah"><i class="fa fa-edit"></i> Ubah</a> &nbsp;
             <a href="#" data-href="' . $link_update . '&amp;id=' . $id . '&amp;action=delete" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash"></i> Hapus</a>
            </td>
		</tr>';
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">DATA KUALIFIKASI</h3>
        <div class="box-tools">
            <a href="<?php echo $link_update; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah kualifikasi</a>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Kode Kualifikasi</th>
                        <th style="text-align: center;">Keterangan Kualifikasi</th>
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
