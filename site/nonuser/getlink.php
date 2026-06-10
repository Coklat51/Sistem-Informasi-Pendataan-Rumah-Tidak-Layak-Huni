<?php if (!defined('AFISYNTAX'))  die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){	
	case file_exists('cpanel/database.php'):			
		require('cpanel/database.php');
		require('cpanel/library.php');
		$record	= new lahir;
		$record->ngeces($base['user'],$base['name'],$base['pass'],$base['host']); 			 
	break;
	default:
		die(require('getlink/default.php'));
	break;
};
switch(TRUE){
/*	MAIN MENU 							======================================================================================================== */
	case $curl['dua']==md5($base['kunci'].'slidemenu')
	&& file_exists('getlink/nonuser/slidemenu.php'):
		require('getlink/nonuser/slidemenu.php');
	break;
/*====================================================================================================== */
/*	DEFAULT GET LINK					======================================================================================================== */
	default:
		require('getlink/default.php');
	break;
};
$record->nutup();
?>