<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){	
	case file_exists('cpanel/database.php')
		 && file_exists('cpanel/func.php'):
		require('cpanel/database.php'); 
		$record	= new lahir;
		$record->ngeces($base['user'],$base['name'],$base['pass'],$base['host']); 
	require('cpanel/func.php');
	require('cpanel/laporan.php');
	break;
	default:
		die(header('location: '.$base['url']));
	break;};
switch(TRUE){
	case $curl['dua']==md5($base['kunci'].'keluar')
	&& file_exists('action/satu/user/keluar.php'):
		require('action/satu/user/keluar.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updateinfo')
	&& file_exists('action/satu/informasi/updateinfo.php'):
		require('action/satu/informasi/updateinfo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatelink')
	&& file_exists('action/satu/informasi/updatelink.php'):
		require('action/satu/informasi/updatelink.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatevideo')
	&& file_exists('action/satu/informasi/updatevideo.php'):
		require('action/satu/informasi/updatevideo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'datauser')
	&& file_exists('action/satu/informasi/datauser.php'):
		require('action/satu/informasi/datauser.php');
	break;
	case $curl['dua']==md5($base['kunci'].'tentangkami')
	&& file_exists('action/satu/informasi/tentangkami.php'):
		require('action/satu/informasi/tentangkami.php');
	break;
	case $curl['dua']==md5($base['kunci'].'datawarga')
	&& file_exists('action/satu/keloladata/datawarga.php'):
		require('action/satu/keloladata/datawarga.php');
	break;
	case $curl['dua']==md5($base['kunci'].'editwarga')
	&& file_exists('action/satu/keloladata/editwarga.php'):
		require('action/satu/keloladata/editwarga.php');
	break;
	case $curl['dua']==md5($base['kunci'].'sosialekonomi')
	&& file_exists('action/satu/keloladata/sosialekonomi.php'):
		require('action/satu/keloladata/sosialekonomi.php');
	break;
	case $curl['dua']==md5($base['kunci'].'aspekinti')
	&& file_exists('action/satu/keloladata/aspekinti.php'):
		require('action/satu/keloladata/aspekinti.php');
	break;
	case $curl['dua']==md5($base['kunci'].'aspekkesehatan')
	&& file_exists('action/satu/keloladata/aspekkesehatan.php'):
		require('action/satu/keloladata/aspekkesehatan.php');
	break;
	case $curl['dua']==md5($base['kunci'].'aspekkeselamatan')
	&& file_exists('action/satu/keloladata/aspekkeselamatan.php'):
		require('action/satu/keloladata/aspekkeselamatan.php');
	break;
	case $curl['dua']==md5($base['kunci'].'fotorumah')
	&& file_exists('action/satu/keloladata/fotorumah.php'):
		require('action/satu/keloladata/fotorumah.php');
	break;
/*	============================================================================================================================================ */
/*	DEFAULT ACTION								================================================================================================ */
	default:
		header('location: '.$base['url']);
	break;
/*	============================================================================================================================================ */};$record->nutup();?>