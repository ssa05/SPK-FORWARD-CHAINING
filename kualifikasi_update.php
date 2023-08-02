<?php
$link_data = '?page=kualifikasi';
$link_update = '?page=update_kualifikasi';

$kode_kualifikasi = '';
$nama_kualifikasi = '';


if (isset($_POST['save'])) {
    $error = '';
    $id = $_POST['id'];
    $action = $_POST['action'];
    $kode_kualifikasi = $_POST['kode_kualifikasi'];
    $nama_kualifikasi = $_POST['nama_kualifikasi'];
    if ($action == "add") {
        
    }
    if (empty($error)) {
        if ($action == 'add') {
            if (mysqli_num_rows(mysqli_query($con, "select * from kualifikasi where nama_kualifikasi='" . $nama_kualifikasi . "'")) > 0) {
                $error = 'nama_kualifikasi sudah ada';
            } else {
                $q = "insert into kualifikasi(kode_kualifikasi,nama_kualifikasi) values ('" . $kode_kualifikasi . "','" . $nama_kualifikasi . "')";
                mysqli_query($con, $q);
                exit("<script>location.href='" . $link_data . "';</script>");
            }
        }
        if ($action == 'edit') {
            $q = mysqli_query($con, "select * from kualifikasi where id_kualifikasi='" . $id . "'");
            $r = mysqli_fetch_array($q);
            $nama_kualifikasi_tmp = $r['nama_kualifikasi'];
            if (mysqli_num_rows(mysqli_query($con, "select * from kualifikasi where nama_kualifikasi='" . $nama_kualifikasi . "' and nama_kualifikasi<>'" . $nama_kualifikasi_tmp . "'")) > 0) {
                $error = 'nama_kualifikasi sudah ada';
            } else {
                $q = "update kualifikasi set kode_kualifikasi='" . $kode_kualifikasi . "',nama_kualifikasi='" . $nama_kualifikasi . "' where id_kualifikasi='" . $id . "'";
                mysqli_query($con, $q);
                exit("<script>location.href='" . $link_data . "';</script>");
            }
        }
        
            }
        
    
} else {
    $action = empty($_GET['action']) ? 'add' : $_GET['action'];
    if ($action == 'edit') {
        $id = $_GET['id'];
        $q = mysqli_query($con, "select * from kualifikasi where id_kualifikasi='" . $id . "'");
        $r = mysqli_fetch_array($q);
        $kode_kualifikasi = $r['kode_kualifikasi'];
        $nama_kualifikasi = $r['nama_kualifikasi'];
    }
    if ($action == 'delete') {
        $id = $_GET['id'];
        mysqli_query($con, "delete from kualifikasi where id_kualifikasi='" . $id . "'");
        exit("<script>location.href='" . $link_data . "';</script>");
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Data Kualifikasi</h3>
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
                <label for="kode_kualifikasi" class="col-sm-2 control-label">Kode Kualifikasi</label>
                <div class="col-sm-4">
                    <input name="kode_kualifikasi" id="kode_kualifikasi" class="form-control" required type="text" value="<?php echo $kode_kualifikasi; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_kualifikasi" class="col-sm-2 control-label">Keterangan Kualifikasi</label>
                <div class="col-sm-4">
                    <input name="nama_kualifikasi" id="nama_kualifikasi" class="form-control" required type="text" value="<?php echo $nama_kualifikasi; ?>">
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