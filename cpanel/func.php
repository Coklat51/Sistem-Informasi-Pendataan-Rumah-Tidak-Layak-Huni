<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');	
function kodeNota($kodeNota,$tabel,$field,$where,$_user,$_name,$_pass,$host) {
	$get_rec = new lahir;
	$get_rec->ngeces($_user,$_name,$_pass,$host);
	$tahun = date('Y');
	$bulan = array(1 => "I", 2=>"II", 3=>"III", 4=>"IV", 5=>"V", 6=>"VI", 7=>"VII", 8=>"VIII", 9=>"IX", 10=>"X", 11=>"XI", 12=>"XII");
	$ar = intval(date("m"));
	$bulanRomawi	= $bulan[$ar];
	$jumlah			= strlen($kodeNota);
	$cek			= $get_rec->ngetoke($tabel,$field,NULL,''.$field.' LIKE "%/'.$bulanRomawi.'/'.$tahun.'%" 
					AND LEFT('.$field.','.$jumlah.')="'.$kodeNota.'" '.$where.'',$field.' DESC',1);
	$row			= $cek->fetch_array();
	$exp			= explode('/',$row[$field]);
	switch(TRUE){
		case !empty($exp[1]):
			$kode 			= (int) $exp[1];
		break;
		default:
			$kode			= 0;
		break;};
	$hasil = $kodeNota.'/'.($kode+1).'/'.$bulanRomawi.'/'.$tahun;
	return $hasil;
	$get_rec->nutup();};
function buatnomor($tabel,$field,$kode,$_user,$_name,$_pass,$host){
	$get_rec = new lahir;
	$get_rec->ngeces($_user,$_name,$_pass,$host);
	$penomoran	= $get_rec->ngetoke($tabel,$field,NULL,NULL,$field.' DESC');
			$nomor		= $penomoran->fetch_object();
			$exp_nomor	= explode($kode,$nomor->$field);
			switch(TRUE){
				case isset($exp_nomor[1]):
					$no 	= intval($exp_nomor[1]);
				break;
				default:
					$no		= 0;
				break;};
			switch(TRUE){
				case($no >= 999999):
					$tambah	= '';
				break;
				case($no >= 99999):
					$tambah	= '0';
				break;
				case($no >= 9999):
					$tambah	= '00';
				break;
				case($no >= 999):
					$tambah	= '000';
				break;
				case($no >= 99):
					$tambah	= '0000';
				break;
				case($no >= 9):
					$tambah	= '00000';
				break;
				case($no >= 0):
					$tambah	= '000000';
				break;
				default:
					$tambah	= '000000';
				break;};
				$hasil		= $kode.$tambah.($no+1);
				return $hasil;
	$get_rec->nutup();};
	
function umur($tanggal){
$birth = new datetime($tanggal);
$today = new datetime('today');
switch(TRUE){
	case $birth > $today: 
	exit(intval('0'));
	break;}
$tahun = $today->diff($birth)->y;
return intval($tahun);};

function cekip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'IP tidak dikenali';
    return $ipaddress;
};
function kompressfoto($source, $destination, $quality){
     $info = getimagesize($source);
	 switch($info['mime']){
		case 'image/jpeg':
		 	$image	=	imagecreatefromjpeg($source);
			imagejpeg($image, $destination, $quality);
		break;
		case 'image/jpg':
		 	$image	=	imagecreatefromjpeg($source);
			imagejpeg($image, $destination, $quality);
		break;
		case 'image/gif':
			 $image	=	imagecreatefromgif($source);
			 imagegif($image, $destination, $quality);
		break;
		case 'image/png':
			$image	=	imagecreatefrompng($source);
			imagepng($image, $destination, $quality);
		break;
	 };
		return $destination;    
 };?>