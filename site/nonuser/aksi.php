<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){	
	case file_exists('cpanel/database.php') 
		 && file_exists('cpanel/func.php'):
		require('cpanel/database.php'); 
		$record	= new lahir;
		$record->ngeces($base['user'],$base['name'],$base['pass'],$base['host']); 
	require('cpanel/func.php');
	break;
	default:
		die(header('location: '.$base['url']));
	break;};
switch(TRUE){
/*============================================================================================== */
/* 	USER										================================================================================================ */
	case $curl['dua']==md5($base['kunci'].'login')
	&& file_exists('action/nonuser/user/login.php'):
		require('action/nonuser/user/login.php');
	break;
	case $curl['dua']==md5($base['kunci'].'tentangkami')
	&& file_exists('action/nonuser/user/tentangkami.php'):
		require('action/nonuser/user/tentangkami.php');
	break;
/*============================================================================================== */
/*	DEFAULT ACTION								================================================================================================ */
	default:
		header('location: '.$base['url']);
	break;
};
$record->nutup();
?>