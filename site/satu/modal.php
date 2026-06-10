<?php if (!defined('AFISYNTAX'))  die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){	
	case file_exists('cpanel/database.php') && file_exists('cpanel/forms.php') && file_exists('cpanel/library.php'):			
		require('cpanel/database.php');
		$record	= new lahir;
		$record->ngeces($base['user'],$base['name'],$base['pass'],$base['host']); 			 
		require('cpanel/forms.php');
		require('cpanel/library.php');
	break;
	default:
		die(require('modal/default.php'));
	break;};
switch(TRUE){
	case $curl['dua']==md5($base['kunci'].'updateinfo')
	&& file_exists('modal/satu/informasi/updateinfo.php'):
		require('modal/satu/informasi/updateinfo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatelink')
	&& file_exists('modal/satu/informasi/updatelink.php'):
		require('modal/satu/informasi/updatelink.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatevideo')
	&& file_exists('modal/satu/informasi/updatevideo.php'):
		require('modal/satu/informasi/updatevideo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'datauser')
	&& file_exists('modal/satu/informasi/datauser.php'):
		require('modal/satu/informasi/datauser.php');
	break;
	case $curl['dua']==md5($base['kunci'].'tentangkami')
	&& file_exists('modal/satu/informasi/tentangkami.php'):
		require('modal/satu/informasi/tentangkami.php');
	break;
	case $curl['dua']==md5($base['kunci'].'datawarga')
	&& file_exists('modal/satu/keloladata/datawarga.php'):
		require('modal/satu/keloladata/datawarga.php');
	break;
/*	============================================================================================================================================ */
/*	DEFAULT	MODAL						======================================================================================================== */
	default:
		require('modal/default.php');
	break;
/*	============================================================================================================================================ */};$record->nutup();?>