<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){
	case file_exists('cpanel/table.php'):
		$record	= new mysqli($base['host'],$base['user'],$base['pass'],$base['name']);
		require('cpanel/table.php');
	break;
	default:
		die('{"iTotalRecords":"0","iTotalDisplayRecords":"0","aaData":[]}');
	break;};
switch(TRUE){	
/*	============================================================================================================================================ */
/* 	ADMINISTRASI KEGIATAN						================================================================================================ */
	case $curl['dua']==md5($base['kunci'].'datauser')
	&& file_exists('table/satu/informasi/datauser.php'):
		require('table/satu/informasi/datauser.php');
	break;
	case $curl['dua']==md5($base['kunci'].'tentangkami')
	&& file_exists('table/satu/informasi/tentangkami.php'):
		require('table/satu/informasi/tentangkami.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updateinfo')
	&& file_exists('table/satu/informasi/updateinfo.php'):
		require('table/satu/informasi/updateinfo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatelink')
	&& file_exists('table/satu/informasi/updatelink.php'):
		require('table/satu/informasi/updatelink.php');
	break;
	case $curl['dua']==md5($base['kunci'].'updatevideo')
	&& file_exists('table/satu/informasi/updatevideo.php'):
		require('table/satu/informasi/updatevideo.php');
	break;
	case $curl['dua']==md5($base['kunci'].'datawarga')
	&& file_exists('table/satu/keloladata/datawarga.php'):
		require('cpanel/database.php');
		require('cpanel/laporan.php');
		require('table/satu/keloladata/datawarga.php');
	break;
	case $curl['dua']==md5($base['kunci'].'rtlhdata')
	&& file_exists('table/satu/masterdata/rtlhdata.php'):
		require('cpanel/laporan.php');
		require('table/satu/masterdata/rtlhdata.php');
	break;
/*	DEFAULT DATA								================================================================================================ */	
	default:
		echo '{"iTotalRecords":"0","iTotalDisplayRecords":"0","aaData":[]}';
	break;
/*	============================================================================================================================================ */};$record->close();?>