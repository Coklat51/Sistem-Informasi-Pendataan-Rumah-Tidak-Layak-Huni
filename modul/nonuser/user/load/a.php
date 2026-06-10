<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('modul/nonuser/user/'.$curl['satu'].'.php'):
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	require('modul/nonuser/user/'.$curl['satu'].'.php');
echo preg_replace('/\r|\n|[\	]/','','
</body>
</html>');?>