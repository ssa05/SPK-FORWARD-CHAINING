<?php
$link_data = '?page=magang';
$link_update = '?page=update_magang';

$kode_perusahaan = '';
$nama_perusahaan = '';
$posisi_magang = '';
$keterangan = '';


if (isset($_POST['save'])) {
    $error = '';
    $id = $_POST['id'];
    $action = $_POST['action'];
    $kode_perusahaan = $_POST['kode_perusahaan'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $posisi_magang = $_POST['posisi_magang'];
    $keterangan = $_POST['keterangan'];
    if ($action == "add") {
        
    }
    if (empty($error)) {
        if ($action == 'add') {
            if (mysqli_num_rows(mysqli_query($con, "select * from magang where nama_perusahaan='" . $nama_perusahaan . "'")) > 0) {
                $error = 'nama_perusahaan sudah ada';
            } else {
                $q = "insert into magang(kode_perusahaan,nama_perusahaan,posisi_magang,keterangan) values ('" . $kode_perusahaan . "','" . $nama_perusahaan . "','" . $posisi_magang . "','" . $keterangan . "')";
                mysqli_query($con, $q);
                exit("<script>location.href='" . $link_data . "';</script>");
            }
        }
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
        $posisi_magang = $r['posisi_magang'];
        $keterangan = $r['keterangan'];
    }
    if ($action == 'delete') {
        $id = $_GET['id'];
        mysqli_query($con, "delete from magang where id_perusahaan='" . $id . "'");
        exit("<script>location.href='" . $link_data . "';</script>");
    }
}
?>
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Data Perusahaan</h3>
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
                <label for="kode_perusahaan" class="col-sm-2 control-label">Kode Perusahaan</label>
                <div class="col-sm-4">
                    <input name="kode_perusahaan" id="kode_perusahaan" class="form-control" required type="text" value="<?php echo $kode_perusahaan; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_perusahaan" class="col-sm-2 control-label">Nama Perusahaan</label>
                <div class="col-sm-4">
                    <input name="nama_perusahaan" id="nama_perusahaan" class="form-control" required type="text" value="<?php echo $nama_perusahaan; ?>">
                </div>
            </div><div class="form-group">
                <label for="posisi_magang" class="col-sm-2 control-label">Posisi Magang</label>
                <div class="col-sm-4">
                    <input name="posisi_magang" id="posisi_magang" class="form-control" required type="text" value="<?php echo $posisi_magang; ?>">
                </div>
            </div><div class="form-group">
                <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                <div class="col-sm-4">
                    <input name="keterangan" id="keterangan" class="form-control" required type="text" value="<?php echo $keterangan; ?>">
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