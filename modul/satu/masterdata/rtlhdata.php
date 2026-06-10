<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('menuslide','menu,title,icon',NULL,'active="'.$curl['dua'].'" AND '.$base['menu'].'');	
switch(TRUE){
	case $query->num_rows > 0:
		$row	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
$chekdesa = $record->kueri('SELECT id_desa,nama_desa FROM instrument_desa');
echo preg_replace('/\r|\n|[\	]/','',
breadcrumb($base['url'],$row->menu,$row->title,$row->icon).'
<section class="page pt-2">
	<div class="container">
		<div class="tab-content" id="myTabContent">
			<div class="row pt-2" id="tabeldata" role="tabpanel">
			<div class=" col-md-3">
				<label>Pilih Desa :</label>
				<select class="form-control" id="desa">
					<option value="" disabled selected>--PILIH DESA--</option>');
	switch(TRUE){
		case $chekdesa->num_rows > 0:
			while($split_desa = $chekdesa->fetch_object()){
			echo preg_replace('/\r|\n|[\	]/','','
					<option value="'.$split_desa->id_desa.'"'); 
					switch(TRUE){
						case !empty($curl['tiga']) && $curl['tiga'] == $split_desa->id_desa: 
							echo 'SELECTED'; 
						break;
						default: 
							echo ''; 
						break;};
					echo '>'.$split_desa->nama_desa.'</option>';};		
		break;
		default:
		break;
	}
echo preg_replace('/\r|\n|\t/', '', '
				</select>
			</div>
				<div class="col-md-3">
					<label>Pilih status :</label>
					<select class="form-control" id="statushuni">
						<option value="" disabled selected>--PILIH STATUS--</option>
						<option value="tlhn"'.(!empty($curl['empat']) && $curl['empat'] == 'tlhn' ? ' selected' : '').'>TIDAK LAYAK HUNI</option>
						<option value="lhn"'.(!empty($curl['empat']) && $curl['empat'] == 'lhn' ? ' selected' : '').'>LAYAK HUNI</option>
					</select>
				</div>
');
echo preg_replace('/\r|\n|[\	]/','','
				</select>
			</div>
				<div class="col-md-12 pb-4 animated slideInUp">
						<table id="afi" data-link="'.$base['data'].md5($base['kunci'].$curl['dua']).'/'.$curl['tiga'].'/'.$curl['empat'].'" class="table table-striped table-bordered" 
					style="width:100%; font-size:12px">
							<thead class="text-center">
								<tr>
									<th rowspan="2">No.</th>
									<th rowspan="2">NIK</th>
									<th rowspan="2">Nama</th>
									<th rowspan="2">Desa</th>
									<th rowspan="2">Alamat</th>
									<th colspan="7">Skor Bangunan</th>
									<th rowspan="2">Status</th>
									<th rowspan="2">Total Score</th>
								</tr>
								<tr>
									<th>Nilai Pondasi</th>
									<th>Nilai Bahan Atap</th>
									<th>Nilai Kondisi Rangka Atap</th>
									<th>Nilai Bahan Dinding</th>
									<th>Nilai Kondisi Dinding</th>
									<th>Nilai Bahan Lantai</th>
									<th>Nilai Kondisi Lantai</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>');?>