<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('menuslide','menu,title,icon',NULL,'active="'.$curl['dua'].'" AND '.$base['menu'].'');	
switch(TRUE){
	case $query->num_rows > 0:
		$row	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
echo preg_replace('/\r|\n|[\	]/','',
breadcrumb($base['url'],$row->menu,$row->title,$row->icon,'-fluid').
message($curl['tiga'],'-fluid').'
<section class="page pt-2">
	<div class="container-fluid">'.
	tab_1().'
		<div class="tab-content" id="myTabContent">
			<div class="row tab-pane fade show active pt-2" id="tabeldata" role="tabpanel">
				<div class="col-md-12 pb-4 animated slideInUp">
						<table id="afi" data-link="'.$base['data'].md5($base['kunci'].$curl['dua']).'" class="table table-striped table-bordered" 
					style="width:100%; font-size:12px">
							<thead class="text-center">
								<tr>
									<th>No.</th>
									<th>NIK</th>
									<th>No. KK</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Rt/Rw</th>
									<th>Desa</th>
									<th>Umur</th>
									<th>Jenis Kelamin</th>
									<th>Keterangan</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
				</div>
			</div>
			<div class="tab-pane fade pt-4" id="insertdata" role="tabpanel">
				<div class="row">
					<div class="col-md-6 offset-md-3">');
						startForm('row','post',$base['aksi'].md5($base['kunci'].$curl['dua']));
						?><div class="form-group col-sm-12"><?php
							inputText('NIK','nik');
						?><div class="form-group col-sm-12"><?php
							inputText('No. KK','kk');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Nama','nama_warga');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Alamat','alamat');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Rt','rt');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Rw','rw');
						?></div><div class="form-group col-sm-12"><?php
						selectBase('Desa','kd_desa','instrument_desa','id_desa','nama_desa',NULL,$base['user'],$base['name'],$base['pass'],$base['host']);
						?></div><div class="form-group col-sm-12"><?php
							inputText('Umur','umur');
						?></div><div class="form-group col-sm-12"><?php
						selectBase('Jenis Kelamin','kdjekel','tb_jekel','kdjekel','jekel',NULL,$base['user'],$base['name'],$base['pass'],$base['host']);
						?></div><?php
							SaveText();
							endForm();
echo preg_replace('/\r|\n|[\	]/','','
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>');?>