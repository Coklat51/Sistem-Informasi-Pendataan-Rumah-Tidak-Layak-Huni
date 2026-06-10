<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/satu/informasi/'.$curl['dua'].'.php'):  
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	heads($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('modul/satu/informasi/'.$curl['dua'].'1.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
</body>
</html>');?>