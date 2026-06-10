<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('data_warga','data_warga.nik AS nikwarga,aspek_keselamatan.*','aspek_keselamatan ON aspek_keselamatan.nik=data_warga.nik',
		'md5(CONCAT("'.$base['kunci'].'",data_warga.nik))="'.$curl['tiga'].'"');
switch(TRUE){
	case $query->num_rows == 1:
		$data	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
$check = $record->ngetoke(
    'aspek_keselamatan b',
    'nik',
    'jawab_milik d ON b.kd_pondasi = d.kd_jawabmlk
     LEFT JOIN instrument_kondisi e ON b.kd_rangka = e.kd_kondisi
     LEFT JOIN instrument_kondisi j ON b.kd_kond_dinding = j.kd_kondisi
     LEFT JOIN instrument_kondisi k ON b.kd_kond_lantai = k.kd_kondisi
     LEFT JOIN instrument_atap l ON b.kd_bahan_atap = l.kd_atap
     LEFT JOIN instrument_dinding m ON b.kd_bahan_dinding = m.kd_dinding
     LEFT JOIN instrument_lantai n ON b.kd_bahan_lantai = n.kd_lantai',
    'md5(CONCAT("'.$base['kunci'].'", b.nik))="' . $record->bener($curl['tiga']) . '"'
);
if($check->num_rows == 0){
$pecah = $check->fetch_object();
$aksi = $record->mlebu('aspek_keselamatan', array('nik' => $data->nikwarga));
}

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
				selectBaseDua('Pondasi','kd_pondasi','jawab_milik','kd_jawabmlk',
				'jawaban',$data->kd_pondasi,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Kolom/Tiang','kd_kolom','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_kolom,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Balok','kd_balok','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_balok,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Atap','kd_kond_atap','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_kond_atap,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Rangka Atap','kd_rangka','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_rangka,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Dinding','kd_kond_dinding','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_kond_dinding,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Kondisi Lantai','kd_kond_lantai','instrument_kondisi','kd_kondisi',
				'kondisi',$data->kd_kond_lantai,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Bahan Atap','kd_bahan_atap','instrument_atap','kd_atap',
				'jenis_atap',$data->kd_bahan_atap,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Bahan Dinding','kd_bahan_dinding','instrument_dinding','kd_dinding',
				'jenis_dinding',$data->kd_bahan_dinding,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-4"><?php
				selectBaseDua('Bahan Lantai','kd_bahan_lantai','instrument_lantai','kd_lantai',
				'jenis_lantai',$data->kd_bahan_lantai,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="col-sm-12"><hr/></div><?php
					hiddenText('kode',$data->nikwarga);
					SaveText();
					endForm();
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');?>