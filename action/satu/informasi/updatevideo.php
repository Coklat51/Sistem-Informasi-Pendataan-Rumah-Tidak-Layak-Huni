<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
	
	 if (empty($input['deskripsi']) || empty($input['linkyoutube']) || empty($input['tanggalvideo'])) {
            header('location: ' . $base['url'] . '/informasi/updatevideo/kosong');
            exit;
        }
	
	$aksi			= $record->mlebu('videoedukasi',
					   array(
					   		 'deskripsi'		=>	str_replace('; ','',strtoupper($input['deskripsi'])),
							 'linkyoutube'	  =>	str_replace('; ','',strtoupper($input['linkyoutube'])),
							 'tanggalvideo'	 =>	str_replace('; ','',strtoupper($input['tanggalvideo']))));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatevideo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatevideo/gagal');
		break;};				
	break;
	case 'Update':
	
	$aksi			= $record->ngowahi('videoedukasi','linkyoutube="'
					  .$record->bener($input['kode']).'"',
					   array(
					   		 'deskripsi'		=>	str_replace('; ','',strtoupper($input['deskripsi'])),
							 'linkyoutube'	  =>	str_replace('; ','',strtoupper($input['linkyoutube'])),
							 'tanggalvideo'	 =>	str_replace('; ','',strtoupper($input['tanggalvideo']))));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatevideo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatevideo/gagal');
		break;};	
	break;
	case 'Delete':
	$aksi			= $record->busek('videoedukasi','linkyoutube="'
					  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatevideo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatevideo/gagal');
		break;};		
	break;};?>