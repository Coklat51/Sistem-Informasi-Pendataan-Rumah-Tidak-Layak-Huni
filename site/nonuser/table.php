<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
switch(TRUE){
	case file_exists('cpanel/table.php'):
		$record	= new mysqli($base['host'],$base['user'],$base['pass'],$base['name']);
		require('cpanel/table.php');
	break;
	default:
		die('{"iTotalRecords":"0","iTotalDisplayRecords":"0","aaData":[]}');
	break;
};
switch(TRUE){	
/*	============================================================================================ */
/* 	SETTING										================================================================================================ */
	case $curl['dua']==md5($base['kunci'].'datartlh')
	&& file_exists('table/nonuser/informasi/datartlh.php'):
		require('table/nonuser/informasi/datartlh.php');
	break;
/*	============================================================================================ */
/*	DEFAULT DATA								================================================================================================ */	
	default:
		echo '{"iTotalRecords":"0","iTotalDisplayRecords":"0","aaData":[]}';
	break;
};
$record->close();
?>