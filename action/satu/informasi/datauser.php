<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;

	case 'Save':
		if (empty($input['user_name']) || empty($input['user_password']) || empty($input['kd_instansi']) || empty($input['user_telp'])) {
			header('location: '.$base['url'].'/informasi/datauser/kosong');
			break;
		}

		$aksi = $record->mlebu('bukuuser',
				   array(	
						'user_name'				=>	str_replace('; ','',strtoupper($input['user_name'])),
						'user_password'			=>	str_replace('; ','',strtoupper($input['user_password'])),
						'instansi'				=>	str_replace('; ','',strtoupper($input['kd_instansi'])),
						'user_telp'				=>	str_replace('; ','',strtoupper($input['user_telp']))
					));
		switch(TRUE){
			case $aksi:
				header('location: '.$base['url'].'/informasi/datauser/sukses');
			break;
			default:
				header('location: '.$base['url'].'/informasi/datauser/gagal');
			break;
		};				
	break;

	case 'Update':

		$aksi = $record->ngowahi('bukuuser', 'user_name="'.$record->bener($input['kode']).'"',
				   array(	
						'user_name'				=>	str_replace('; ','',strtoupper($input['user_name'])),
						'user_password'			=>	str_replace('; ','',strtoupper($input['user_password'])),
						'instansi'				=>	str_replace('; ','',strtoupper($input['kd_instansi'])),
						'user_telp'				=>	str_replace('; ','',strtoupper($input['user_telp']))
					));
		switch(TRUE){
			case $aksi:
				header('location: '.$base['url'].'/informasi/datauser/sukses');
			break;
			default:
				header('location: '.$base['url'].'/informasi/datauser/gagal');
			break;
		};	
	break;

	case 'Delete':
		$aksi = $record->busek('bukuuser', 'user_name="'.$record->bener($input['kode']).'"');
		switch(TRUE){
			case $aksi:
				header('location: '.$base['url'].'/informasi/datauser/sukses');
			break;
			default:
				header('location: '.$base['url'].'/informasi/datauser/gagal');
			break;
		};		
	break;
};
?>
