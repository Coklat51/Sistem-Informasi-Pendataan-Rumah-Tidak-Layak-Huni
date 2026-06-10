<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n/','','
	<div class="container afi-header d-print-none">
		<h5 class="mb-0 pt-2 judule"><i class="fa fa-info-circle"></i> NOTIFIKASI</h5>
		<a class="close-menu" href="#"><i class="fa fa-close"></i></a>
	</div>
	<div class="afi-menu">');
switch($base['afi']){
default:
echo preg_replace('/\r|\n/','','
	<div class="text-center">
		<h4>No result</h4>
	</div>');
break;
case md5($base['kunci'].'notif'):
$notif	= '';
$query	= $record->ngetoke('bukutentangkami','kdtentangkami,`tentangkami_tanggal`, `tentangkami_nama`, `tentangkami_email`, `tentangkami_deskripsi`, COUNT(kdtentangkami) AS jumlah,jenistentangkami',' instrumentjenistentangkami b ON bukutentangkami.kdjenistentangkami=b.kdjenistentangkami','status="1" GROUP BY bukutentangkami.kdjenistentangkami');
switch(TRUE){
	case $query->num_rows > 0:
		while($data	= $query->fetch_object()){
			$notif	.= '
					<a class="media text-muted pt-3" href="'.$base['url'].'/informasi/tentangkami/'.'/'.$data->kdtentangkami.'">
						<img class="mr-2 rounded" src="'.$base['url'].'/images/default/noimages.png" style="width: 32px; height: 32px;">
						<div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
							<div class="d-flex justify-content-between align-items-center w-100">
								<strong class="text-gray-dark">'.$data->jenistentangkami.'</strong>
								<span class="badge badge-danger rounded-circle" style="font-size:.75rem">'.$data->jumlah.'</span>
							</div>
							<span class="d-block">'.$data->tentangkami_deskripsi.'</span>
						</div>
					</a>';
		};
	break;
	default:
	break;};
echo preg_replace('/\r|\n/','','
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			'.$notif.'
		</div>
	</div>
</div>');
break;};
echo preg_replace('/\r|\n/','','
	</div>
	<div class="text-center pt-5" id="no-print">Designed by <a href="https://kecamatangunungwungkal.co.id/">Kecamatan Gunungwungkal.co.id</a></div>');?>