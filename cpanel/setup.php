<?php define('AFISYNTAX',TRUE);
mb_internal_encoding('UTF-8');
date_default_timezone_set('Asia/Jakarta');
global $base;
global $curl;
global $topbar;
global $sesi;
global $cookie;
global $input;
global $get;
global $up;
$base							= array();
$curl							= array();
$topbar						  = array();
$explode						 = array();
$sesi							=& $_SESSION;
$cookie						  =& $_COOKIE;
$input						   =& $_POST;
$get							 =& $_GET;
$up							  =& $_FILES;
switch(TRUE){
	case empty($sesi['kunci']):
		$sesi['kunci']		   = substr(str_shuffle(						
								 '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,10).'-';
		$base['kunci']		   = $sesi['kunci'];
	break;
	default:
		$base['kunci']		   = $sesi['kunci'];
	break;
};
$base['url']					 = 'https://'.$_SERVER['HTTP_HOST'].'/siprtlh'; 
$base['register']				= 21;
$base['license']				 = 'siprtlh';
$base['link']					= preg_replace('/[^A-Za-z0-9\/-]/','',$_SERVER['REQUEST_URI']);
$base['curl']					= (explode('/',$base['link']));
$base['afi']					 = isset($input['AFI']) ? $input['AFI'] : NULL;
$base['upload']				  = $base['url'].'/images/default/upload.png';
$base['data']					= 'siprtlh/'.md5($base['kunci'].'data').'/';
$base['aksi']					= $base['url'].'/'.md5($base['kunci'].'aksi').'/';
$base['modal']				   = $base['url'].'/'.md5($base['kunci'].'modal').'/';
$base['getlink']				 = $base['url'].'/'.md5($base['kunci'].'getlink').'/';
$base['linkget']				 = 'siprtlh/'.md5($base['kunci'].'getlink').'/';
$base['js']					  = $base['url'].'/style/js/';
$base['pass']					= '';
$base['user']					= 'root'; 
$base['name']					= 'db_rtlh';
$base['host']					= 'localhost';
$base['youtube']				 = 'https://www.youtube.com/watch?';
$curl['satu']					= isset($base['curl'][2])		? $base['curl'][2] 		: NULL;
$curl['dua']					 = isset($base['curl'][3]) 		? $base['curl'][3] 		: NULL;
$curl['tiga']					= isset($base['curl'][4]) 		? $base['curl'][4] 		: NULL;
$curl['empat']				   = isset($base['curl'][5]) 		? $base['curl'][5] 		: NULL;
$curl['lima']					= isset($base['curl'][6]) 		? $base['curl'][6] 		: NULL;
$curl['enam']					= isset($base['curl'][7]) 		? $base['curl'][7] 		: NULL;
$curl['tujuh']				   = isset($base['curl'][8]) 		? $base['curl'][8] 		: NULL;
$curl['delapan']				 = isset($base['curl'][9]) 		? $base['curl'][9] 		: NULL;
$curl['sembilan']				= isset($base['curl'][10]) 	   ? $base['curl'][10] 	   : NULL;
$curl['sepuluh']				 = isset($base['curl'][11]) 	   ? $base['curl'][11] 	   : NULL;
$cookie['username']			  = isset($cookie['username'])	 ? $cookie['username'] 	 : NULL;
$cookie['pass']				  = isset($cookie['pass'])		 ? $cookie['pass'] 		 : NULL;
switch(TRUE){
	case !empty($sesi['menu']) && !empty($sesi['kdlevelku']):
		$base['menu']			= $sesi['menu'];
		$base['img']			 = $base['url'].'/images/default/csr'.$sesi['kdlevelku'].'.jpg';
	break;
	default:
		$base['menu']			= 'nonuser=1';
		$base['img']			 = $base['url'].'/images/default/csr.jpg';
	break;
};
?>