<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
			header('location: '.$base['url']);
	break;
	case 'Save':
					$post['kd_pendidikan']		= isset($input['kd_pendidikan']) ? $input['kd_pendidikan'] : NULL;
					$post['kd_pekerjaan']		 = isset($input['kd_pekerjaan'])  ? $input['kd_pekerjaan']  : NULL;
					$post['kd_gaji']			  = isset($input['kd_gaji'])	   ? $input['kd_gaji'] 	   : NULL;
					$post['kd_mampu']			 = isset($input['kd_mampu']) 	  ? $input['kd_mampu'] 	  : NULL;
	$isi			= array(
							'kd_pendidikan'	   => $post['kd_pendidikan'],
							'kd_pekerjaan'		=> $post['kd_pekerjaan'],
							'kd_gaji'			 => $post['kd_gaji'],
							'kd_mampu'			=> $post['kd_mampu'],
							'nik'				 => $input['kode']);
	$query		  = $record->ngetoke('sosial_ekonomi','nik',NULL,'nik="'
					 .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $query->num_rows > 0:
			$aksi   = $record->ngowahi('sosial_ekonomi','nik="'
					 .$record->bener($input['kode']).'"',$isi);
		break;
		default:
			$aksi   = $record->mlebu('sosial_ekonomi',$isi);
		break;};
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/sosialekonomi/'.md5($base['kunci'].$input['kode']).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/sosialekonomi/'.md5($base['kunci'].$input['kode']).'/gagal');
		break;};	
	break;};?>