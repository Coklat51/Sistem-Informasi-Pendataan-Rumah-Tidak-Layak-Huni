<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','data_warga.nik AS nikwarga,foto_rumah.*','foto_rumah ON foto_rumah.nik=data_warga.nik',
		'md5(CONCAT("'.$base['kunci'].'",data_warga.nik))="'.$curl['tiga'].'"');
switch(TRUE){
	case $query->num_rows == 1:
		$data	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
if(!empty($data->foto_depan)){ $foto_depan = $base['url'].'/'.$data->foto_depan;} else { $foto_depan = $base['upload']; }
if(!empty($data->foto_kanan)){ $foto_kanan = $base['url'].'/'.$data->foto_kanan;} else { $foto_kanan = $base['upload']; }
if(!empty($data->foto_kiri)){ $foto_kiri = $base['url'].'/'.$data->foto_kiri;} else { $foto_kiri = $base['upload'];}
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
							upfoto('Foto Depan','foto_depan',$foto_depan);
						?></div><div class="form-group col-sm-4"><?php
							upfoto('Foto Samping Kanan','foto_kanan',$foto_kanan);
						?></div><div class="form-group col-sm-4"><?php
							upfoto('Foto Samping Kiri','foto_kiri',$foto_kiri);
						?></div><?php
							hiddenText('kode',$data->nikwarga);
							SaveText();
							endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>