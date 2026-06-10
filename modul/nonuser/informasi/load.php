<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/nonuser/informasi/'.$curl['dua'].'.php'):  
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	headings($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('modul/nonuser/informasi/'.$curl['dua'].'.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
<script type="text/javascript">
	$(document).on("change","#desa",function(){
	var desa			=	$("#desa").val();
	window.location		=	"'.$base['url'].'/'.$curl['satu'].'/'.$curl['dua'].'/"+desa;});
</script>
</body>
</html>');?>