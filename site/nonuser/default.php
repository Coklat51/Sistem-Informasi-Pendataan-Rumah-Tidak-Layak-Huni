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
	case empty($curl['satu'])	 && file_exists('modul/nonuser/home/load/a.php'):
		require('modul/nonuser/home/load/a.php');
	break;
	case !empty($curl['satu'])	&& $curl['satu']=='login'
	&& file_exists('modul/nonuser/user/load/a.php'):
		require('modul/nonuser/user/load/a.php');
	break;
	case !empty($curl['satu'])	&& $curl['satu']=='tentangkami'
	&& file_exists('modul/nonuser/user/load/b.php'):
		require('modul/nonuser/user/load/b.php');
	break;
/*============================================================================================== */	
/* 	INFO										================================================================================================ */
	case !empty($curl['satu'])	&& $curl['satu']=='informasi':
	switch(TRUE){
		default:
			require('modul/noaccess.php');
		break;
		case !empty($curl['dua']) && $curl['dua']=='datartlh'
		&& file_exists('modul/nonuser/informasi/load.php'):
			require('modul/nonuser/informasi/load.php');
		break;
	};
	break;
};
$record->nutup();
?>