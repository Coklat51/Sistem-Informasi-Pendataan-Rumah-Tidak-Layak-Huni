<?php
ob_start('ob_gzhandler');
session_start();
switch(TRUE){
	case file_exists('cpanel/setup.php'):
		require('cpanel/setup.php');
	break; 
	default:
		die ('<h1 align="center">WEBSITE SEDANG DALAM PROSES PERBAIKAN (MAIN TENIS)</h1><br>
			  <img src="'.$base['url'].'/images/default/maintenis.gif" 
			  style="margin-left:auto; margin-right:auto; width:100%"/>');
	break;
};
switch(TRUE){
	case (!empty($_SERVER['HTTPS']) 								&& ('on' <> $_SERVER['HTTPS'])):
		header('Location: '.$base['url']);
	break;
};
switch(TRUE){
	case empty($sesi['kdlevelku']):
		switch(TRUE){
		default:
			require('site/nonuser/default.php');	
		break;
		case($curl['satu']==md5($base['kunci'].'data'))			&& file_exists('site/nonuser/table.php'):
			require('site/nonuser/table.php');	
		break;
		case($curl['satu']==md5($base['kunci'].'aksi'))			&& file_exists('site/nonuser/aksi.php'):	
			require('site/nonuser/aksi.php');			
		break;
		case($curl['satu']==md5($base['kunci'].'getlink'))		 && file_exists('site/nonuser/getlink.php'):
			require('site/nonuser/getlink.php');		
		break;};
	break;
	case !empty($sesi['kdlevelku']):
		switch(TRUE){
		default:
			require('site/satu/default.php');	
		break;
		case($curl['satu']==md5($base['kunci'].'data'))			&& file_exists('site/satu/table.php'):
			require('site/satu/table.php');	
		break;
		case($curl['satu']==md5($base['kunci'].'aksi'))			&& file_exists('site/satu/aksi.php'):	
			require('site/satu/aksi.php');			
		break;
		case($curl['satu']==md5($base['kunci'].'modal'))		   && file_exists('site/satu/modal.php'):
			require('site/satu/modal.php');		
		break;
		case($curl['satu']==md5($base['kunci'].'getlink'))		 && file_exists('site/satu/getlink.php'):
			require('site/satu/getlink.php');		
		break;};
	break;
	default:
		die ('<h1 align="center">WEBSITE SEDANG DALAM PROSES PERBAIKAN (MAIN TENIS)</h1><br>
			  <img src="'.$base['url'].'/images/default/maintenis.gif" 
			  style="margin-left:auto; margin-right:auto; width:100%"/>');
	break;};
ob_end_flush();?>