<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','data_warga.nik AS nikwarga,aspek_kesehatan.*','aspek_kesehatan ON aspek_kesehatan.nik=data_warga.nik',
		'md5(CONCAT("'.$base['kunci'].'",data_warga.nik))="'.$curl['tiga'].'"');
switch(TRUE){
	case $query->num_rows == 1:
		$data	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
echo preg_replace('/\r|\n|[\	]/','',
breadcrumb($base['url'],$kiri['menu'],$kiri['title'],$kiri['icon'],'-fluid').
message($curl['lima'],'-fluid').'
<section class="page pt-1">
	<div class="container-fluid">
		<div class="row">
			<ul class="col-md-1 col-2 nav flex-column leftmenu px-0">'.$kiri['left'].'</ul>
			<div class="col-md-11 col-10 pb-4 px-0 pt-2 border">');
				startForm('row','post',$base['aksi'].md5($base['kunci'].$curl['dua']));
				?><div class="form-group col-sm-4"><?php
				selectBaseDua('Jendela','kd_jendela','jawab_milik','kd_jawabmlk',
				'jawaban',$data->kd_jendela,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Ventilasi','kd_ventilasi','jawab_milik','kd_jawabmlk',
				'jawaban',$data->kd_ventilasi,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Sumber Air','kd_sumberair','instrument_air','kd_air',
				'sumber_air',$data->kd_sumberair,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kamar Mandi/Jamban','kd_km','instrument_km','kd_km',
				'jenis_km',$data->kd_km,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Jarak Septiktank ke Sumber Air','kd_jarak','instrument_jarak','kd_jarak',
				'jarak_spt',$data->kd_jarak,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Penerangan','kd_penerangan','instrument_penerangan','kd_penerangan',
				'jenis_penerangan',$data->kd_penerangan,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="col-sm-12"><hr/></div><?php
					hiddenText('kode',$data->nikwarga);
					SaveText();
					endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>