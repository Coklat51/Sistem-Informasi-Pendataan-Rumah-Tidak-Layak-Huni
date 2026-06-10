<?php if (!defined('AFISYNTAX')) die('Access Denied'); ?>
<?php
function uang($number) {
	switch(TRUE){
		case(!empty($number)):
			$bilangan = number_format($number,2,",","."); 
		break;
		default:
			$bilangan = '-';
		break;};
	return '<p class="text-right">'.$bilangan.'</p>';};
function nominal($number) {
	switch(TRUE){
		case(!empty($number)):
			$bilangan = number_format($number,2,",","."); 
		break;
		default:
			$bilangan = '-';
		break;};
	return '<p class="text-right">'.$bilangan.'</p>';};
function nomor($number) {
	switch(TRUE){
		case(!empty($number)):
			$bilangan = number_format($number,0,",","."); 
			return '<p class="text-right">'.$bilangan.'</p>';
		break;
		default:
			$bilangan = '-';
			return '<p class="text-right">'.$bilangan.'</p>';
		break;};};			
function telp($number) {
	switch(TRUE){
		case(!empty($number)):
			$bilangan = '+62'.number_format($number, 0, ",", " "); 
			return '<p class="text-right">'.$bilangan.'</p>';
		break;
		default:
			$bilangan = '+62'.$number;
			return '<p class="text-right">'.$bilangan.'</p>';
		break;};};		
function indotgl($tgl) {
	$tanggal = explode("-",$tgl);
	$hari = $tanggal[2];
	$hari = explode(' ',$hari);
	switch(TRUE){
	case(empty($hari[1])):
		$jam = '';
	break;
	default: 
		$jam = $hari[1]; 
	break;};
	$ar_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');	
	switch(TRUE){
		case(empty($hari[0])): 
			$hari = ''; 
		break; 
		default: 
			$hari = $hari[0]; 
		break;};
	switch(TRUE){
		case(empty($ar_bulan[abs($tanggal[1])])): 
			$bulan = ''; 
		break; 
		default: 
			$bulan = $ar_bulan[abs($tanggal[1])]; 
		break;};
	switch(TRUE){
		case(empty($tanggal[0])): 
			$tahun = ''; 
		break; 
		default: 
			$tahun = $tanggal[0]; 
		break;};
	$tanggal = $hari.' '.$bulan.' '.$tahun.' '.$jam;
	switch(TRUE){
		case($tahun == '0000'):
			return '';
		break;
		default:
			return '<p class="text-right">'.strtoupper($tanggal).'</p>';
		break;};};
function indotglx($tgl) {
	$tanggal = explode("-",$tgl);
	$hari = $tanggal[2];
	$hari = explode(' ',$hari);
	switch(TRUE){
		case(empty($hari[1])): 
			$jam = '';
		break;
		default: 
			$jam = $hari[1]; 
		break;};
	$ar_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');	
	switch(TRUE){
		case(empty($hari[0])): 
			$hari = ''; 
		break; 
		default: 
			$hari = $hari[0]; 
		break;};
	switch(TRUE){
		case(empty($ar_bulan[abs($tanggal[1])])): 
			$bulan = ''; 
		break; 
		default: 
			$bulan = $ar_bulan[abs($tanggal[1])]; 
		break;};
	switch(TRUE){
		case(empty($tanggal[0])): 
			$tahun = ''; 
		break; 
		default: 
			$tahun = $tanggal[0]; 
		break;};
	$tanggal = $hari.' '.$bulan.' '.$tahun.' '.$jam;
	switch(TRUE){
		case($tahun == '0000'):
			return '';
		break;
		default:
			return strtoupper($tanggal);
		break;};};
function indtgl($tgl) {
	$tanggal = explode("-",$tgl);
	$hari = $tanggal[2];
	$hari = explode(' ',$hari);
	switch(TRUE){
		case(empty($hari[1])): 
			$jam = '';
		break; 
		default: 
			$jam = $hari[1]; 
		break;};
	$ar_bulan = array(1=>'Jan','Feb','Mar', 'Apr', 'Mei', 'Jun','Jul','Agu','Sep','Okt', 'Nov','Des');
	
	switch(TRUE){
		case(empty($hari[0])): 
			$hari = ''; 
		break; 
		default: 
			$hari = $hari[0]; 
		break;};
	switch(TRUE){
		case(empty($ar_bulan[abs($tanggal[1])])): 
			$bulan = ''; 
		break; 
		default: 
			$bulan = $ar_bulan[abs($tanggal[1])]; 
		break;};
	switch(TRUE){
		case(empty($tanggal[0])): 
			$tahun = ''; 
		break; 
		default: 
			$tahun = $tanggal[0]; 
		break;};
	$tanggal = $hari.'-'.$bulan.'-'.$tahun.' '.$jam;
	switch(TRUE){
		case($tahun == '0000'):
			return '';
		break;
		default:
			return '<p class="text-right">'.strtoupper($tanggal).'</p>';
		break;};};
	
function tgl ($tgl) {
	switch(TRUE){
		case(!empty($tgl)):
			$tanggal = explode("-",$tgl);
			$tahun = $tanggal[0];
			$bulan = $tanggal[1];
			$ar_hari = explode(' ',$tanggal[2]);
			$hari = $ar_hari[0];
	switch(TRUE){
		case(empty($ar_hari[1])) :
			$jam = ''; 
		break; 
		default: 
			$jam = $ar_hari[1]; 
		break;};
	$tanggal = $hari.'-'.$bulan.'-'.$tahun.' '.$jam;
	$tanggal = trim($tanggal);
	switch(TRUE){
		case($tahun == '0000'):
			return '';
		break;
		default:
			return '<p class="text-right">'.$tanggal.'</p>';
		break;};
	break;
	default:
		$tanggal = $tgl;
		return '<p class="text-right">'.$tanggal.'</p>';
	break;};};
function bulanInd($tgl) {
	$ar_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
	$arx = $tgl;
	  switch(TRUE){
	  	case(substr($arx,0,1)==0):
			$ar = substr($arx,1,1);
		break;
		default:
			$ar = $arx;
		break;};
	$bulan = $ar_bulan[$ar];
	return strtoupper($bulan);};
	
function umur($tanggal){
$birth = new datetime($tanggal);
$today = new datetime('today');
switch(TRUE){
	case $birth > $today: 
		exit('0 TH');
	break;}
$tahun = $today->diff($birth)->y;
return $tahun.' TH';};

function kanan($kanan){
switch(TRUE){
	case !empty($kanan): 
		$datakanan	= $kanan;
	break;
	default:
		$datakanan	= '';
	break;}
return '<p class="text-right">'.$datakanan.'</p>';};

function aktif($kanan){
switch(TRUE){
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<i class="fa fa-check text-success"></i>';
	break;
	default:
		$datakanan	= '<i class="fa fa-close text-danger"></i>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};

function check($kanan){
switch(TRUE){
	case !empty($kanan) && $kanan=='YA': 
		$datakanan	= '<i class="fa fa-check text-success"></i>';
	break;
	case !empty($kanan) && $kanan=='T': 
		$datakanan	= '<i class="fa fa-check text-success"></i>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<i class="fa fa-check text-success"></i>';
	break;
	default:
		$datakanan	= '<i class="fa fa-close text-danger"></i>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function setuju($kanan){
switch(TRUE){
	case empty($kanan): 
		$datakanan	= '<span class="badge badge-pill badge-primary text-wrap">Proses</span>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<span class="badge badge-pill badge-success text-wrap">Setuju</span>';
	break;
	case !empty($kanan) && $kanan=='2': 
		$datakanan	= '<span class="badge badge-pill badge-success text-wrap">Alokasi Program Lain</span>';
	break;
	default:
		$datakanan	= '<span class="badge badge-pill badge-danger text-wrap">Ditolak</span>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function lapor($kanan){
switch(TRUE){
	case empty($kanan): 
		$datakanan	= '<span class="badge badge-pill badge-dark text-wrap">Belum Terlapor</span>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<span class="badge badge-pill badge-primary text-wrap">Terlapor</span>';
	break;
	case !empty($kanan) && $kanan=='2': 
		$datakanan	= '<span class="badge badge-pill badge-warning text-wrap">Revisi</span>';
	break;
	default:
		$datakanan	= '<span class="badge badge-pill badge-success text-wrap">Valid</span>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function laporx($kanan){
switch(TRUE){
	case empty($kanan): 
		$datakanan	= '<span class="badge badge-pill badge-dark text-wrap">Belum Terlapor</span>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<span class="badge badge-pill badge-primary text-wrap">Terlapor</span>';
	break;
	case !empty($kanan) && $kanan=='2': 
		$datakanan	= '<span class="badge badge-pill badge-warning text-wrap">Diterima</span>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function approve($kanan){
switch(TRUE){
	case empty($kanan): 
		$datakanan	= '<i class="fa fa-hourglass-half text-warning kintilmu" data-placement="bottom" title="Menunggu"></i>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<i class="fa fa-check text-success kintilmu" data-placement="bottom" title="Diterima"></i>';
	break;
	default:
		$datakanan	= '<i class="fa fa-close text-danger kintilmu" data-placement="bottom" title="Ditolak"></i>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function konfirm($kanan){
switch(TRUE){
	case empty($kanan): 
		$datakanan	= '<i class="fa fa-hourglass-half text-warning kintilmu" data-placement="bottom" title="Menunggu"></i>';
	break;
	case !empty($kanan) && $kanan=='1': 
		$datakanan	= '<i class="fa fa-check text-success kintilmu" data-placement="bottom" title="Terkonfirmasi"></i>';
	break;
	default:
		$datakanan	= '<i class="fa fa-close text-danger kintilmu" data-placement="bottom" title="Ditolak"></i>';
	break;}
	return '<p class="text-center" style="font-size:1rem;">'.$datakanan.'</p>';
};
function fsize($file){
	switch(TRUE){
		case file_exists($file):
			$size 	= filesize($file);
			$size 	/= 1024000;
			$bunyi	= round($size,2).' MB';
		break;
		default:
			$bunyi	= 'File Not Found!';
		break;};
	return $bunyi;};?>