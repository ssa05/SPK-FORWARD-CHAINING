<?php
$link_proses='?page=proses_konsultasi';

$chk_kualifikasi='';
$q="select * from kualifikasi order by id_kualifikasi";
$q=mysqli_query($con,$q);
while($r=mysqli_fetch_array($q)){
	$kode_kualifikasi = $r['kode_kualifikasi'];
	$nama_kualifikasi = $r['nama_kualifikasi'];
	$chk_kualifikasi.='
	<tr>
		<td align="center"><input type="checkbox" name="kualifikasi[]" class="flat" value="'.$r['id_kualifikasi'].'"></td>
		<td>'.$kode_kualifikasi.' - '.$nama_kualifikasi.'</td>
	</tr>';
}
?>
<script type="text/javascript">
    $(document).ready(function(){
		$('#frm').submit(function(){
			if(!$('input[type=checkbox]:checked').length) {
				$('#chkModal').modal('show');
				return false;
			}
			return true;
		});

		$('input[type="checkbox"].flat').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
    });
</script>
<div class="box box-success">
	<div class="box-header with-border">
		<h3 class="box-title">KUALIFIKASI</h3>
	</div>
	<form action="<?php echo $link_proses;?>" id="frm" method="post" >
		<div class="box-body">
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th width="40"></th>
							<th><h3>PILIH 10 KUALIFIKASI SESUAI KEMAMPUAN ANDA</h3></th>
						</tr>
					</thead>
					<tbody>
						<?php echo $chk_kualifikasi; ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="box-footer">
			<div class="text-center col-sm-2">
				<button type="submit" name="proses" class="btn btn-success">Proses</button>
			</div>
		</div>
	</form>
</div>
<div class="modal fade" id="chkModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">PERHATIKAN</h4>
            </div>
            <div class="modal-body">
                <p>Pilih 10 Kualifikasi Sesuai Kemampuan</p>
            </div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">OK</button>
			</div>
        </div>
    </div>
</div>