<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
			header('location: '.$base['url']);
	break;
	case 'Update':
	
	$aksi		= $record->ngowahi('data_warga','nik="'.$record->bener($input['kode']).'"',
				   array(
				   		'nik'			=>	$input['nik'],
						'kk'			 =>	str_replace('; ','',strtoupper($input['kk'])),
						'nama_warga'	 =>	str_replace('; ','',strtoupper($input['nama_warga'])),
						'alamat'		 =>	str_replace('; ','',strtoupper($input['alamat'])),
						'rt'			 =>	str_replace('; ','',strtoupper($input['rt'])),
						'rw'			 =>	str_replace('; ','',strtoupper($input['rw'])),
						'kd_desa'		=>	str_replace('; ','',strtoupper($input['kd_desa'])),
						'umur'		   =>	str_replace('; ','',strtoupper($input['umur'])),
						'jekel_warga'	=>	str_replace('; ','',strtoupper($input['kdjekel']))));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/editwarga/'.md5($base['kunci'].$input['kode']).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/editwarga/'.md5($base['kunci'].$input['kode']).'/gagal');
		break;};	
	break;};?>