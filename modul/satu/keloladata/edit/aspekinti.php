<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','data_warga.nik AS nikwarga,aspek_inti.*','aspek_inti ON aspek_inti.nik=data_warga.nik',
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
				selectBaseDua('Status Rumah','kd_status_1','jawab_status','kd_jawabsts',
				'jawaban',$data->kd_status_1,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Status Tanah','kd_status_2','jawab_status1','kd_jawabsts',
				'jawaban',$data->kd_status_2,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Rumah Lain','kd_milik_1','jawab_milik','kd_jawabmlk',
				'jawaban',$data->kd_milik_1,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Tanah Lain','kd_milik_2','jawab_milik','kd_jawabmlk',
				'jawaban',$data->kd_milik_2,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				inputText('Luas Rumah','luasrumah',$data->luasrumah);
				?></div><div class="form-group col-sm-4"><?php
				inputText('Jumlah Penghuni','jml_penghuni',$data->jml_penghuni);
				?></div><div class="form-group col-sm-4"><?php
				inputText('Jumlah KK','jml_kk',$data->jml_kk);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Bantuan','kd_bantuan','instrument_bantuan','kd_bantuan',
				'jenis_bantuan',$data->kd_bantuan,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				inputText('Tahun Bantuan(Th-bln-tgl)','tahunbantuan',$data->tahunbantuan);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kawasan','kd_kawasan','instrument_kawasan','kd_kawasan',
				'jenis_kawasan',$data->kd_kawasan,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="col-sm-12"><hr/></div><?php
					hiddenText('kode',$data->nikwarga);
					SaveText();
					endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>