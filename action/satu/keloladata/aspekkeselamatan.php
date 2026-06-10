<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch($base['afi']){
	default:
		header('location: '.$base['url']);
	break;
	case 'Save':
	
					$post['kd_pondasi']		= isset($input['kd_pondasi']) 	? $input['kd_pondasi'] 	: NULL;
					$post['kd_kolom']	      = isset($input['kd_kolom'])  ? $input['kd_kolom']  : NULL;
					$post['kd_balok']	  	  = isset($input['kd_balok'])  ? $input['kd_balok']  : NULL;
					$post['kd_kond_atap']	  = isset($input['kd_kond_atap'])		 ? $input['kd_kond_atap'] 		 : NULL;
					$post['kd_rangka']		 = isset($input['kd_rangka']) 	  ? $input['kd_rangka'] 	  : NULL;
					$post['kd_kond_dinding']   = isset($input['kd_kond_dinding']) ? $input['kd_kond_dinding'] : NULL;
					$post['kd_kond_lantai']	= isset($input['kd_kond_lantai']) ? $input['kd_kond_lantai'] : NULL;
					$post['kd_bahan_atap']	 = isset($input['kd_bahan_atap']) ? $input['kd_bahan_atap'] : NULL;
					$post['kd_bahan_dinding']  = isset($input['kd_bahan_dinding']) ? $input['kd_bahan_dinding'] : NULL;
					$post['kd_bahan_lantai']   = isset($input['kd_bahan_lantai']) ? $input['kd_bahan_lantai'] : NULL;
	$jumlah = array('pondasi'     => jawabmiliknya($post['kd_pondasi']),
					'kondisirangka' => kondisinya($post['kd_rangka']),
					'kondisidind' => kondisinya($post['kd_kond_dinding']),
					'kondisilant' => kondisinya($post['kd_kond_lantai']),
					'bahanatap'   => atap($post['kd_bahan_atap']),
					'bahandinding'=> dinding($post['kd_bahan_dinding']),
					'bahanlantai' => lantai($post['kd_bahan_lantai']));
	$nilai  = array_sum($jumlah);
	$isi			= array(
						  'nik'				=> $input['kode'],
						  'kd_pondasi'		 => $post['kd_pondasi'],
						  'kd_kolom'	   	   => $post['kd_kolom'],
						  'kd_balok'	   	   => $post['kd_balok'],
						  'kd_kond_atap'	   => $post['kd_kond_atap'],
						  'kd_rangka'		  => $post['kd_rangka'],
						  'kd_kond_dinding'	=> $post['kd_kond_dinding'],
						  'kd_kond_lantai'	 => $post['kd_kond_lantai'],
						  'kd_bahan_atap'	  => $post['kd_bahan_atap'],
						  'kd_bahan_dinding'   => $post['kd_bahan_dinding'],
						  'kd_bahan_lantai'	=> $post['kd_bahan_lantai'],
						  'total_nilai'		=> $nilai);
	$query		  = $record->ngetoke('aspek_keselamatan','nik',NULL,'nik="'
					 .$record->bener($input['kode']).'"');
	if($query->num_rows > 0){
			$aksi   = $record->ngowahi('aspek_keselamatan','nik="'
					 .$record->bener($input['kode']).'"',$isi);
	}
	switch(TRUE){
		case $aksi:
			header('location: '.$base['url'].'/keloladata/aspekkeselamatan/'.md5($base['kunci'].$input['kode']).'/sukses');
		break;
		default:
			header('location: '.$base['url'].'/keloladata/aspekkeselamatan/'.md5($base['kunci'].$input['kode']).'/gagal');
		break;};	
	break;};?>