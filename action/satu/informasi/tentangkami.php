<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Update':
	
	$aksi	=	$record->ngowahi('bukutentangkami','kdtentangkami="'
				 .$record->bener($input['kode']).'"',
				  array(	
					'status'				 =>	str_replace('; ','',strtoupper($input['status']))));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/tentangkami/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/tentangkami/gagal');
		break;
	};	
	break;
	case 'Delete':
	$aksi	=	$record->busek('bukutentangkami','kdtentangkami="'
				 .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/tentangkami/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/tentangkami/gagal');
		break;
	};		
	break;
};
?>