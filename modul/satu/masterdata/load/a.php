<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/satu/masterdata/'.$curl['dua'].'.php'):  
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	heads($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('modul/satu/masterdata/'.$curl['dua'].'.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
<script type="text/javascript" src="'.$base['url'].'/validasi/a/'.$curl['dua'].'.js"></script>
<script type="text/javascript">
	$(document).on("change","#desa",function(){
	var desa			=	$("#desa").val();
	window.location		=	"'.$base['url'].'/'.$curl['satu'].'/'.$curl['dua'].'/"+desa;});
	$(document).on("change","#statushuni",function(){
	var status			=	$("#statushuni").val();
	window.location		=	"'.$base['url'].'/'.$curl['satu'].'/'.$curl['dua'].'/'.$curl['tiga'].'/"+status;});
</script>
</body>
</html>');?>