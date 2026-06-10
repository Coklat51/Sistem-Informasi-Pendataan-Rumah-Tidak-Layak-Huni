<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
					$post['kd_status_1']		= isset($input['kd_status_1'])	? $input['kd_status_1']  : NULL;
					$post['kd_status_2']		= isset($input['kd_status_2'])	? $input['kd_status_2']  : NULL;
					$post['kd_milik_1']		 = isset($input['kd_milik_1'])	 ? $input['kd_milik_1']   : NULL;
					$post['kd_milik_2']		 = isset($input['kd_milik_2'])	 ? $input['kd_milik_2']   : NULL;
					$post['luasrumah']		  = isset($input['luasrumah'])	  ? $input['luasrumah']    : NULL;
					$post['jml_penghuni']	   = isset($input['jml_penghuni'])   ? $input['jml_penghuni'] : NULL;
					$post['jml_kk']			 = isset($input['jml_kk'])		 ? $input['jml_kk']       : NULL;
					$post['kd_bantuan']		 = isset($input['kd_bantuan'])	 ? $input['kd_bantuan']   : NULL;
					$post['tahunbantuan']	   = isset($input['tahunbantuan'])   ? $input['tahunbantuan'] : NULL;
					$post['kd_kawasan']		 = isset($input['kd_kawasan'])	 ? $input['kd_kawasan']   : NULL;
	$isi			= array(
						  'nik'				 => $input['kode'],
						  'kd_status_1'		 => $post['kd_status_1'],
						  'kd_status_2'		 => $post['kd_status_2'],
						  'kd_milik_1'		  => $post['kd_milik_1'],
						  'kd_milik_2'		  => $post['kd_milik_2'],
						  'luasrumah'		   => $post['luasrumah'],
						  'jml_penghuni'		=> $post['jml_penghuni'],
						  'jml_kk'			  => $post['jml_kk'],
						  'kd_bantuan'		  => $post['kd_bantuan'],
						  'tahunbantuan'		=> $post['tahunbantuan'],
						  'kd_kawasan'		  => $post['kd_kawasan']);
	$query		  = $record->ngetoke('aspek_inti','nik',NULL,'nik="'
					 .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $query->num_rows > 0:
			$aksi   = $record->ngowahi('aspek_inti','nik="'
					 .$record->bener($input['kode']).'"',$isi);
		break;
		default:
			$aksi   = $record->mlebu('aspek_inti',$isi);
		break;};
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/aspekinti/'.md5($base['kunci'].$input['kode']).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/aspekinti/'.md5($base['kunci'].$input['kode']).'/gagal');
		break;};	
	break;};?>