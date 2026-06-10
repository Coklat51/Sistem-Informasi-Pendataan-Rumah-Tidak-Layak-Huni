<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/nonuser/user/'.$curl['satu'].'.php'):
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	headings($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('modul/nonuser/user/'.$curl['satu'].'.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
</body>
</html>');?>