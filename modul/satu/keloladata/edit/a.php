<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/satu/keloladata/edit/'.$curl['dua'].'.php'):  
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	heads($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('themes/leftmenu.php');
	require('modul/satu/keloladata/edit/'.$curl['dua'].'.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
<script type="text/javascript">
	$("#tahunbantuan").datepicker({
	dateFormat	:	"yy-mm-dd",
	changeMonth	:	true,
	changeYear	:	true,
	yearRange	:	"'. (date('Y')-100) .':'. (date('Y')+1).'",
	showAnim	:	"slide"
	});
</script>
</body>
</html>');?>