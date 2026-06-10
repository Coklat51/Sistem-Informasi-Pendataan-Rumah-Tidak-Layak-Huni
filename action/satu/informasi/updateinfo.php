<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
	$dilarang				= array('jpg','jpeg','png','gif');
	
	  if (empty($input['judulberita']) || empty($input['urlberita']) || empty($input['tglberita'])) {
            header('location: '.$base['url'].'/informasi/updateinfo/kosong');
            exit;
        }
	
	switch(TRUE){
		case(!empty($up['fotoberita']['name'])):
			$img			 = explode('.', $up['fotoberita']['name']);
			$ekstensi		= strtolower(end($img));
       switch(TRUE){
			case (in_array($ekstensi,$dilarang)) : 
				$upload	  = 'images/berita/'.$base['license'].'-icon-'
							   .$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
				$aksi		= copy($up['fotoberita']['tmp_name'], $upload);
			break;
			default:
				header('location: '.$base['url'].'/informasi/updateinfo/koreksi');
			break;};
		break;
		default:
			$upload		  = 'images/default/noimages.png';
		break;};
	$aksi					= $record->mlebu('infoberita',
							   array('judulberita'	=>	str_replace('; ','',strtoupper($input['judulberita'])),
									 'urlberita'      =>	str_replace('; ','',strtoupper($input['urlberita'])),
									 'tglberita'	  =>	str_replace('; ','',strtoupper($input['tglberita'])),
									 'fotoberita'	 =>	$upload));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updateinfo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updateinfo/gagal');
		break;};				
	break;
	case 'Update':
	$dilarang				= array('jpg','jpeg','png','gif');
	switch(TRUE){
		case(!empty($up['fotoberita']['name'])):
			$img			 = explode('.', $up['fotoberita']['name']);
			$ekstensi		= strtolower(end($img));
       switch(TRUE){
			case (in_array($ekstensi,$dilarang)) : 
				$upload	  = 'images/berita/'.$base['license'].'-icon-'
							   .$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
				$aksi		= copy($up['fotoberita']['tmp_name'], $upload);
				unlink($input['fotoberita']);
			break;
			default:
				header('location: '.$base['url'].'/informasi/updateinfo/koreksi');
			break;};
		break;
		default:
				$upload	  = $input['fotoberita'];;
		break;};
	$aksi					= $record->ngowahi('infoberita','judulberita="'
							  .$record->bener($input['kode']).'"',
							   array('judulberita'	=>	str_replace('; ','',strtoupper($input['judulberita'])),
									 'urlberita'	  =>	str_replace('; ','',strtoupper($input['urlberita'])),
									 'tglberita'	  =>	str_replace('; ','',strtoupper($input['tglberita'])),
									 'fotoberita'	 =>	$upload));
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updateinfo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updateinfo/gagal');
		break;};	
	break;
	case 'Delete':
	$aksi					= $record->busek('infoberita','judulberita="'
							  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/informasi/updateinfo/sukses');
		break;
		default:
			header('location: '.$base['url'].'/informasi/updateinfo/gagal');
		break;};		
	break;};?>