<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
	case file_exists('themes/topmenu.php') && file_exists('themes/footer.php') && file_exists('modul/satu/keloladata/'.$curl['dua'].'.php'):  
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
	heads($base['url'],$app->warnalicense,$app->logolicense);
	require('themes/topmenu.php');
	require('modul/satu/keloladata/'.$curl['dua'].'.php');
	require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/','','
<script type="text/javascript">
	$(document).on("click","#delete",function(){
	var delet	=	$(this).data("id");
	var afi		=	"'.md5($base['kunci'].'Delete').'";
	$.ajax({
		url		:	"'.$base['modal'].md5($base['kunci'].$curl['dua']).'",
		type	:	"POST",
		data	:	"&AFI="+afi+"&delete="+delet,
		cache	:	false,
		success	:	function(data){
					$("#myModal").empty();
					$("#myModal").html(data);}});});
</script>
</body>
</html>');?>