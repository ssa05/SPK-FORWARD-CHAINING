<?php
$link_data = '?page=rule';
$link_update = '?page=update_rule';

$kode_perusahaan = '';
$nama_perusahaan = '';
$combo_kualifikasi = '';
// daftar kualifikasi agar bisa dipilih multiple atau banyak
$combo_kualifikasi .= '<select multiple class="selectpicker form-control" data-live-search="true" name="kualifikasi[]" id="kualifikasi" required title="Pilih...">';
$q = "select * from kualifikasi order by id_kualifikasi";
$q = mysqli_query($con, $q);
while ($r = mysqli_fetch_array($q)) {
    $combo_kualifikasi .= '<option value="' . $r['id_kualifikasi'] . '">' . $r['kode_kualifikasi'] . ' - ' . $r['nama_kualifikasi'] . '</option>';
}
$combo_kualifikasi .= '</select>';

if (isset($_POST['save'])) {
    $error = '';
    $id = $_POST['id'];
    $action = $_POST['action'];
    $kode_perusahaan = $_POST['kode_perusahaan'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $kualifikasi = $_POST['kualifikasi'];
    if ($action == "add") {
    }
    
    if (empty($error)) {
        if ($action == 'edit') {
            $q = mysqli_query($con, "select * from magang where id_perusahaan='" . $id . "'");
            $r = mysqli_fetch_array($q);
            $nama_perusahaan_tmp = $r['nama_perusahaan'];
            if (mysqli_num_rows(mysqli_query($con, "select * from magang where nama_perusahaan='" . $nama_perusahaan . "' and nama_perusahaan<>'" . $nama_perusahaan_tmp . "'")) > 0) {
                $error = 'nama_perusahaan sudah ada';
            } else {
                $q = "update magang set kode_perusahaan='" . $kode_perusahaan . "',nama_perusahaan='" . $nama_perusahaan . "' where id_perusahaan='" . $id . "'";
                mysqli_query($con, $q);
            exit("<script>location.href='" . $link_data . "';</script>");
        }
    }
}
} else {
    $action = empty($_GET['action']) ? 'add' : $_GET['action'];
    if ($action == 'edit') {
        $id = $_GET['id'];
        $q = mysqli_query($con, "select * from magang where id_perusahaan='" . $id . "'");
        $r = mysqli_fetch_array($q);
        $kode_perusahaan = $r['kode_perusahaan'];
        $nama_perusahaan = $r['nama_perusahaan'];
        $kualifikasi = array();
        $qkualifikasi = "select * from rule where id_perusahaan='$id'";
        $qkualifikasi = mysqli_query($con, $qkualifikasi);
        while ($rkualifikasi = mysqli_fetch_array($qkualifikasi)) { //perulangan untuk menampung data kualifikasi
            $kualifikasi[] = $rkualifikasi['id_kualifikasi'];
        }
        // set data kualifikasi yang ada agar otomatis ter ceklis sesuai dengan data yang ada di database
        echo "
		<script>
			$(function() {
				$('#kualifikasi').selectpicker('val', " . json_encode($kualifikasi) . ");
			});
		</script>
		";
    }
    if ($action == 'delete') {
        $id = $_GET['id'];
        mysqli_query($con, "delete from rule where id_perusahaan='" . $id . "'");
        exit("<script>location.href='" . $link_data . "';</script>");
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Data Rule</h3>
    </div>
    <form class="form-horizontal" action="<?php echo $link_update; ?>" method="post">
        <input name="id" type="hidden" value="<?php echo $id; ?>">
        <input name="action" type="hidden" value="<?php echo $action; ?>">
        <div class="box-body">
            <?php
            if (!empty($error)) {
                echo '<div class="alert bg-danger" role="alert">' . $error . '</div>';
            }
            ?>
            <div class="form-group">
                <label for="kode_perusahaan" class="col-sm-2 control-label">Kode perusahaan</label>
                <div class="col-sm-4">
                    <input name="kode_perusahaan" id="kode_perusahaan" class="form-control" readonly type="text" value="<?php echo $kode_perusahaan; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="id_perusahaan" class="col-sm-2 control-label">Nama perusahaan</label>
                <div class="col-sm-4">
                    <input name="nama_perusahaan" id="nama_perusahaan" class="form-control" readonly type="text" value="<?php echo $nama_perusahaan; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="id_kualifikasi" class="col-sm-2 control-label">Daftar kualifikasi</label>
                <div class="col-sm-4">
                    <?php echo $combo_kualifikasi; ?>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="text-center col-sm-6">
                <button type="submit" name="save" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?php echo $link_data; ?>" class="btn btn-default"><i class="fa fa-times"></i> Batal</a>
            </div>
        </div>
    </form>
</div>