<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){	
	case file_exists('cpanel/database.php')
		&& file_exists('cpanel/forms.php') 
		&& file_exists('cpanel/library.php'):
		require('cpanel/database.php'); 
		$record	= new lahir;		
		$record->ngeces($base['user'],$base['name'],$base['pass'],$base['host']);
		require('cpanel/forms.php');
		require('cpanel/library.php');
		$query	 = $record->ngetoke('license','*',NULL,'reg="'.$record->bener($base['register']).'" 
					 AND license="'.$record->bener($base['license']).'"');
	break;
	default:
		die('<h1 align="center">WEBSITE SEDANG DALAM PROSES PERBAIKAN (MAIN TENIS)</h1><br>
			<img src="'.$base['url'].'/images/default/maintenis.gif" style="margin-left:auto; 
			margin-right:auto; width:100%"/>');
	break;
};
switch(TRUE){
	case $query->num_rows > 0: 
		$app	   = $query->fetch_object();
	break;
	default:
		die(require('modul/noaccess.php'));
	break;
};
switch(TRUE){	
/*	DEFAULT										================================================================================================ */
	default:
		require('modul/noaccess.php');
	break;
	case empty($curl['satu'])									&& $sesi['kdlevelku']==1
	&& file_exists('modul/satu/home/load/a.php'):
		require('modul/satu/home/load/a.php');
	break;
	case empty($curl['satu'])									&& $sesi['kdlevelku']==2
	&& file_exists('modul/satu/home/load/b.php'):
		require('modul/satu/home/load/b.php');
	break;
/*	============================================================================================================================================ */	
/* 	USER										================================================================================================ */
	case !empty($curl['satu'])									&& $curl['satu']=='keloladata':
	switch(TRUE){
		default:
			require('modul/noaccess.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='datawarga'
	  && file_exists('modul/satu/keloladata/load/a.php'):
			require('modul/satu/keloladata/load/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='editwarga'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='sosialekonomi'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='aspekinti'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='aspekkesehatan'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='aspekkeselamatan'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='fotorumah'
	  && file_exists('modul/satu/keloladata/edit/a.php'):
			require('modul/satu/keloladata/edit/a.php');
		break;
	};
	break;
/*	============================================================================================================================================ */	
/* 	INFORMASI										================================================================================================ */
	case !empty($curl['satu'])									&& $curl['satu']=='informasi':
	switch(TRUE){
		default:
			require('modul/noaccess.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='updateinfo'
		&& file_exists('modul/satu/informasi/load/a.php'):
			require('modul/satu/informasi/load/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='updatelink'
		&& file_exists('modul/satu/informasi/load/a.php'):
			require('modul/satu/informasi/load/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='updatevideo'
		&& file_exists('modul/satu/informasi/load/a.php'):
			require('modul/satu/informasi/load/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='datauser'
		&& file_exists('modul/satu/informasi/load/a.php'):
			require('modul/satu/informasi/load/a.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='tentangkami'
		&& file_exists('modul/satu/informasi/load/a.php'):
			require('modul/satu/informasi/load/a.php');
		break;
	};
	break;
	case !empty($curl['satu'])									&& $curl['satu']=='masterdata':
	switch(TRUE){
		default:
			require('modul/noaccess.php');
		break;
		case !empty($curl['dua'])								 && $curl['dua']=='rtlhdata'
		&& file_exists('modul/satu/masterdata/load/a.php'):
			require('modul/satu/masterdata/load/a.php');
		break;
	};
	break;
};
$record->nutup();
?>