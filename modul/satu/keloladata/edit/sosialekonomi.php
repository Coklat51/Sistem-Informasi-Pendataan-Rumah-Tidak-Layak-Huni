<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','data_warga.nik AS nikwarga,sosial_ekonomi.*','sosial_ekonomi ON sosial_ekonomi.nik=data_warga.nik',
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
message($curl['empat'],'-fluid').'
<section class="page pt-1">
	<div class="container-fluid">
		<div class="row">
			<ul class="col-md-1 col-2 nav flex-column leftmenu px-0">'.$kiri['left'].'</ul>
			<div class="col-md-11 col-10 pb-4 px-0 pt-2 border">');
				startForm('row','post',$base['aksi'].md5($base['kunci'].$curl['dua']));
				?><div class="form-group col-sm-4"><?php
				selectBaseDua('Pendidikan','kd_pendidikan','instrument_pendidikan','kd_pendidikan',
				'riwayat_pendidikan',$data->kd_pendidikan,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Pekerjaan','kd_pekerjaan','instrument_pekerjaan','kd_pekerjaan',
				'nama_pekerjaan',$data->kd_pekerjaan,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Penghasilan','kd_gaji','instrument_gaji','kd_gaji',
				'range_gaji',$data->kd_gaji,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Mampu Swadaya','kd_mampu','instrument_mampu','kd_mampu',
				'mampu',$data->kd_mampu,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="col-sm-12"><hr/></div><?php
					hiddenText('kode',$data->nikwarga);
					SaveText();
					endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>