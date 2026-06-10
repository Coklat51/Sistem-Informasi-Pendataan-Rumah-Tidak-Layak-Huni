<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
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
</div>');?>