<?php 
	unset($sesi['panjul']);
	unset($sesi['kdperusahaan']);
	unset($sesi['kdlevelku']);
	$sesi['menu']='nonuser=1';
	header('location:'.$base['url']);		
?>