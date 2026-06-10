<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','*','tb_jekel 					ON tb_jekel.kdjekel=data_warga.jekel_warga
												  LEFT JOIN instrument_desa  ON instrument_desa.id_desa=data_warga.kd_desa',
		'md5(CONCAT("'.$base['kunci'].'",data_warga.nik))="'.$curl['tiga'].'"');
switch(TRUE){
	case $query->num_rows > 0:
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
					inputText('NIK','nik',$data->nik);
				?></div><div class="form-group col-sm-4"><?php
					inputText('No. KK','kk',$data->kk);
				?></div><div class="form-group col-sm-4"><?php
					inputText('Nama','nama_warga',$data->nama_warga);
				?></div><div class="form-group col-sm-12"><?php
					inputText('Alamat','alamat',$data->alamat);
				?></div><div class="form-group col-sm-2 col-6"><?php
					inputText('RT','rt',$data->rt);
				?></div><div class="form-group col-sm-2 col-6"><?php
					inputText('RW','rw',$data->rw);
				?></div><div class="form-group col-sm-3"><?php
						selectBase('Desa','kd_desa','instrument_desa','id_desa','nama_desa',$data->kd_desa,$base['user'],$base['name'],$base['pass'],$base['host']);
						?></div><div class="form-group col-sm-2 col-6"><?php
					inputText('Umur','umur',$data->umur);
				?></div><div class="form-group col-sm-3"><?php
					selectBase('Jenis Kelamin','kdjekel','tb_jekel','kdjekel','jekel',$data->jekel_warga,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="col-sm-12"><hr/></div><?php
					hiddenText('kode',$data->nik);
					updateText();
					endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>