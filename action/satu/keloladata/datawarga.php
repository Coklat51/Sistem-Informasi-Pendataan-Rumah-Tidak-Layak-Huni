<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
			header('location: '.$base['url']);
	break;
	case 'Save':
	
	if (empty($input['nik']) || empty($input['kk']) || empty($input['nama_warga']) || 
            empty($input['alamat']) || empty($input['rt']) || empty($input['rw']) || 
            empty($input['kd_desa']) || empty($input['umur']) || empty($input['kdjekel'])) {
            header('location: ' . $base['url'] . '/keloladata/datawarga/kosong');
            exit;
        }
	
	$aksi		= $record->mlebu('data_warga',
				   array(
				   		'nik'			=>	str_replace('; ','',strtoupper($input['nik'])),
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
			header('location: '.$base['url'].'/keloladata/datawarga/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/datawarga/gagal');
		break;};				
	break;
	case 'Delete':
	$aksi		= $record->busek('data_warga','nik="'
				  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/datawarga/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/datawarga/gagal');
		break;};		
	break;};?>