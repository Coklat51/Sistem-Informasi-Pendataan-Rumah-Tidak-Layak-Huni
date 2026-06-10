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
			<div class="row tab-pane fade show active pt-2" id="tabeldata" role="tabpanel">
			<div class="form-group col-md-3">
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
echo preg_replace('/\r|\n|[\	]/','','
				</select>
			</div>
				<div class="col-md-12 pb-4 animated slideInUp">
						<table id="afi" data-link="'.$base['data'].md5($base['kunci'].$curl['dua']).'/'.$curl['tiga'].'" class="table table-striped table-bordered" 
					style="width:100%; font-size:12px">
							<thead class="text-center">
								<tr>
									<th>No.</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Rt/Rw</th>
									<th>Alamat</th>
									<th>Desa</th>
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