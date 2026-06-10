<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
			header('location: '.$base['url']);
	break;
	case 'Save':
	$dilarang				= array('jpg','jpeg','png','gif');
	switch(TRUE){
		case(!empty($up['foto_depan']['name'])):
			$img			 = explode('.', $up['foto_depan']['name']);
			$ekstensi		= strtolower(end($img));
		   switch(TRUE){
				case (in_array($ekstensi,$dilarang)) : 
					$upload1 = 'images/rumah/'.$base['license'].'-rumah-depan-'
								.$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
					$aksi	= copy($up['foto_depan']['tmp_name'], $upload1);
				break;
				default:
					header('location: '.$base['url'].'/keloladata/fotorumah/'.$record->bener(md5($base['kunci'].$input['kode'])).'/koreksi');
				break;};
		break;
		default:
			$upload1		 = 'images/default/noimages.png';
		break;};
	$dilarang				= array('jpg','jpeg','png','gif');
	switch(TRUE){
		case(!empty($up['foto_kanan']['name'])):
			$img			 = explode('.', $up['foto_kanan']['name']);
			$ekstensi		= strtolower(end($img));
		   switch(TRUE){
				case (in_array($ekstensi,$dilarang)) : 
					$upload2 = 'images/rumah/'.$base['license'].'-rumah-kanan-'
								.$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
					$aksi	=  copy($up['foto_kanan']['tmp_name'], $upload2);
				break;
				default:
					header('location: '.$base['url'].'/keloladata/fotorumah/'.$record->bener(md5($base['kunci'].$input['kode'])).'/koreksi');
				break;};
		break;
		default:
			$upload2		 = 'images/default/noimages.png';
		break;};
	$dilarang				= array('jpg','jpeg','png','gif');
	switch(TRUE){
		case(!empty($up['foto_kiri']['name'])):
			$img			 = explode('.', $up['foto_kiri']['name']);
			$ekstensi		= strtolower(end($img));
		   switch(TRUE){
				case (in_array($ekstensi,$dilarang)) : 
					$upload3 = 'images/rumah/'.$base['license'].'-rumah-kiri-'
								.$sesi['panjul'].'-'.date('YmdHis').'.'.$ekstensi;
					$aksi	= copy($up['foto_kiri']['tmp_name'], $upload3);
				break;
				default:
					header('location: '.$base['url'].'/keloladata/fotorumah/'.$record->bener(md5($base['kunci'].$input['kode'])).'/koreksi');
				break;};
		break;
		default:
			$upload3		 = 'images/default/noimages.png';
		break;};
	$query				   = $record->ngetoke('foto_rumah','nik',NULL,'nik="'
							  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $query->num_rows > 0:
			$aksi			= $record->ngowahi('foto_rumah','nik="'
							  .$record->bener($input['kode']).'"',$isi);
		break;
		default:
			$aksi			= $record->mlebu('foto_rumah',
								array(
									'nik'					   =>	$input['kode'],
									'foto_depan'				=>	$upload1,
									'foto_kanan'				=>	$upload2,
									'foto_kiri'				 =>	$upload3));
		break;};
	
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/fotorumah/'.$record->bener(md5($base['kunci'].$input['kode'])).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/fotorumah/'.$record->bener(md5($base['kunci'].$input['kode'])).'/gagal');
		break;};				
	break;
	case 'Delete':
	$aksi					= $record->busek('foto_rumah','nik="'
							  .$record->bener($input['kode']).'"');
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/fotorumah/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/fotorumah/gagal');
		break;};		
	break;};?>