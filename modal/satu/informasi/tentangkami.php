<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch($base['afi']){
	default:
echo preg_replace('/\r|\n|[\	]/','','
<div class="modal-dialog animated zoomIn" role="document">
	<div class="modal-content">
		<div class="modal-header" role="document">
			<h5 class="modal-title"><i class="fa fa-warning"></i> NOTICE</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="col-sm-12">
				<p>Tidak Ada Data Yang Ditampilkan <i style="color:#F00"></i></p>
			</div>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Tutup</button>
		</div>
	</div>
</div>');
	break;
	case md5($base['kunci'].'Edit'):
	$query	=	$record->ngetoke('bukutentangkami','*','
			  instrumentjenistentangkami ON instrumentjenistentangkami.kdjenistentangkami=bukutentangkami.kdjenistentangkami ','kdtentangkami="'.$record->bener($input['edit']).'"');
echo preg_replace('/\r|\n|[\	]/','','
<div class="modal-dialog animated zoomIn" role="document">
	<form class="modal-content" method="post" action="'.$base['aksi'].md5($base['kunci'].'tentangkami').'" enctype="multipart/form-data">
		<div class="modal-header" role="document">
			<h5 class="modal-title"><i class="fa fa-edit"></i> Ubah Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">');
		switch(TRUE){
			case ($query->num_rows > 0):
				$data	=	$query->fetch_object();
					?><div class="form-group col-sm-12"><?php
						selectBase('Status','status','instrument_status','kd_status','nama_status',
						$data->status,$base['user'],$base['name'],$base['pass'],$base['host']);
					?></div><?php
						hiddenText('kode',$input['edit']);
			break;
			default:
				echo'<div class="col-sm-12"><p>Tidak Ada Data Yang Ditampilkan</p></div>';
			break;};
echo preg_replace('/\r|\n|[\	]/','','
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Batal</button>
			<button type="submit" name="AFI" value="Update" class="btn btn-md btn-success"><i class="fa fa-level-up"></i> Update</button>
		</div>
	</form>
</div>');
	break;
	case md5($base['kunci'].'Delete'):
echo preg_replace('/\r|\n|[\	]/','','
<div class="modal-dialog animated zoomIn"  role="document">
	<form class="modal-content" method="post" action="'.$base['aksi'].md5($base['kunci'].'tentangkami').'">
		<div class="modal-header" role="document">
			<h5 class="modal-title"><i class="fa fa-trash"></i> Hapus Data</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="modal-body">
			<div class="col-sm-12">
				<p>Yakin Anda menghapus data tersebut <i style="color:#F00"></i></p>
				<p>Jika iya tekan tombol Hapus, jika tidak tekan tanda Batal</p>');
				hiddenText('kode',$input['delete']);
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Batal</button>
			<button type="submit" name="AFI" value="Delete" class="btn btn-md btn-success"><i class="fa fa-trash"></i> Hapus</button>
		</div>
	</form>
</div>');
	break;};?>