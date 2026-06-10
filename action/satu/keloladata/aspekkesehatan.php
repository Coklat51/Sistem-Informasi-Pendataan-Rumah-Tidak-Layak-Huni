<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
					$post['kd_jendela']		= isset($input['kd_jendela']) 	? $input['kd_jendela'] 	: NULL;
					$post['kd_ventilasi']	  = isset($input['kd_ventilasi'])  ? $input['kd_ventilasi']  : NULL;
					$post['kd_sumberair']	  = isset($input['kd_sumberair'])  ? $input['kd_sumberair']  : NULL;
					$post['kd_km']			 = isset($input['kd_km'])		 ? $input['kd_km'] 		 : NULL;
					$post['kd_jarak']		  = isset($input['kd_jarak']) 	  ? $input['kd_jarak'] 	  : NULL;
					$post['kd_penerangan']	 = isset($input['kd_penerangan']) ? $input['kd_penerangan'] : NULL;
	$isi			= array(
						  'nik'				=> $input['kode'],
						  'kd_jendela'		 => $post['kd_jendela'],
						  'kd_ventilasi'	   => $post['kd_ventilasi'],
						  'kd_sumberair'	   => $post['kd_sumberair'],
						  'kd_km'			  => $post['kd_km'],
						  'kd_jarak'		   => $post['kd_jarak'],
						  'kd_penerangan'	  => $post['kd_penerangan']);
	$query		  = $record->ngetoke('aspek_kesehatan','nik',NULL,'nik="'
					 .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $query->num_rows > 0:
			$aksi   = $record->ngowahi('aspek_kesehatan','nik="'
					 .$record->bener($input['kode']).'"',$isi);
		break;
		default:
			$aksi   = $record->mlebu('aspek_kesehatan',$isi);
		break;};
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/aspekkesehatan/'.md5($base['kunci'].$input['kode']).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/aspekkesehatan/'.md5($base['kunci'].$input['kode']).'/gagal');
		break;};	
	break;};?>