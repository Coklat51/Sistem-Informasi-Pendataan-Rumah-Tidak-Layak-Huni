<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
	$dilarang			= array('jpg','jpeg','png','gif');
	
	if (empty($input['urllinkterkait']) || empty($input['deskripsilink'])) {
            header('location: ' . $base['url'] . '/informasi/updatelink/kosong');
            exit;
        }
	
	switch(TRUE){
		case(!empty($up['fotolinkterkait']['name'])):
			$img		 = explode('.', $up['fotolinkterkait']['name']);
			$ekstensi	= strtolower(end($img));
       switch(TRUE){
			case (in_array($ekstensi,$dilarang)) : 
				$upload  = 'images/linkterkait/'.$base['license'].'-link-'
						   .$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
				$aksi	= copy($up['fotolinkterkait']['tmp_name'], $upload);
			break;
			default:
				header('location: '.$base['url'].'/informasi/updatelink/koreksi');
			break;};
		break;
		default:
			$upload	  = 'images/default/noimages.png';
		break;};
	$aksi				= $record->mlebu('linkterkait',
							array(	
								  'urllinkterkait'	=> str_replace('; ','',strtoupper($input['urllinkterkait'])),
								  'deskripsilink'	 => str_replace('; ','',strtoupper($input['deskripsilink'])),
								  'fotolinkterkait'   => $upload));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatelink/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatelink/gagal');
		break;};				
	break;
	case 'Update':
	$dilarang			= array('jpg','jpeg','png','gif');
	switch(TRUE){
		case(!empty($up['fotolinkterkait']['name'])):
			$img		 = explode('.', $up['fotolinkterkait']['name']);
			$ekstensi	= strtolower(end($img));
       switch(TRUE){
			case (in_array($ekstensi,$dilarang)) : 
				$upload  = 'images/linkterkait/'.$base['license'].'-link-'
						   .$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
				$aksi	= copy($up['fotolinkterkait']['tmp_name'], $upload);
				unlink($input['fotolinkterkait']);
			break;
			default:
				header('location: '.$base['url'].'/informasi/updatelink/koreksi');
			break;};
		break;
		default:
			$upload	  = $input['fotolinkterkait'];;
		break;};
	$aksi				= $record->ngowahi('linkterkait','urllinkterkait="'
						  .$record->bener($input['kode']).'"',
						   array(
						   		 'urllinkterkait'	=>	str_replace('; ','',strtoupper($input['urllinkterkait'])),
								 'deskripsilink'	 =>	str_replace('; ','',strtoupper($input['deskripsilink'])),
								 'fotolinkterkait'   =>	$upload));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatelink/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatelink/gagal');
		break;};	
	break;
	case 'Delete':
	$aksi				= $record->busek('linkterkait','urllinkterkait="'
						  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updatelink/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updatelink/gagal');
		break;};		
	break;};?>