<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case empty($sesi['kdlevelku']) 												&& file_exists('topmenu/nonuser.php'):
		require('topmenu/nonuser.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='1' 					&& file_exists('topmenu/satu.php'):
		require('topmenu/satu.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='2' 					&& file_exists('topmenu/dua.php'):
		require('topmenu/dua.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='3' 					&& file_exists('topmenu/dua.php'):
		require('topmenu/dua.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='4' 					&& file_exists('topmenu/satu.php'):
		require('topmenu/satu.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='5' 					&& file_exists('topmenu/satu.php'):
		require('topmenu/satu.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='6' 					&& file_exists('topmenu/enam.php'):
		require('topmenu/enam.php');
	break;
	case !empty($sesi['kdlevelku']) && $sesi['kdlevelku']=='7' 					&& file_exists('topmenu/satu.php'):
		require('topmenu/satu.php');
	break;
	default:
		die ('<h1 align="center">WEBSITE SEDANG DALAM PROSES PERBAIKAN (MAIN TENIS)</h1><br>
			<img src="'.$base['url'].'/images/default/maintenis.gif" style="margin-left:auto; 
			margin-right:auto; width:100%"/>');
	break;};?>