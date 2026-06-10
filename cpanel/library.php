<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');  
function heading($link=NULL,$warna=NULL){
echo  preg_replace('/\r|\n|[\	]/','','<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<link href="'.$link.'/images/icon/jateng.png" rel="icon">
<link href="'.$link.'/images/icon/jateng.png" rel="apple-touch-icon">
<link href="'.$link.'/style/css/afia1.css" rel="stylesheet">
<link href="'.$link.'/style/css/style.css" rel="stylesheet">
<link href="'.$link.'/style/css/head.css" rel="stylesheet">
<link href="'.$link.'/style/colour/degradasi.css" rel="stylesheet">
<script src="'.$link.'/style/js/jquery.js"></script>
</head>');};

function headings($link=NULL,$warna=NULL,$icon=NULL){
echo  preg_replace('/\r|\n|[\	]/','','<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<link href="'.$link.'/'.$icon.'" rel="icon">
<link href="'.$link.'/'.$icon.'" rel="apple-touch-icon">
<link href="'.$link.'/style/css/afia1.css" rel="stylesheet">
<link href="'.$link.'/style/css/style.css" rel="stylesheet">
<link href="'.$link.'/style/css/header.css" rel="stylesheet">
<link href="'.$link.'/style/css/leftmenu.css" rel="stylesheet">
<link href="'.$link.'/style/colour/degradasi.css" rel="stylesheet">
<script src="'.$link.'/style/js/jquery.js"></script>
</head>');};

function heads($link=NULL,$warna=NULL,$icon=NULL){
echo  preg_replace('/\r|\n|[\	]/','','
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<link href="'.$link.'/'.$icon.'" rel="icon">
<link href="'.$link.'/'.$icon.'" rel="apple-touch-icon">
<link href="'.$link.'/style/css/afia1.css" rel="stylesheet">
<link href="'.$link.'/style/css/style.css" rel="stylesheet">
<link href="'.$link.'/style/css/heading.css" rel="stylesheet">
<link href="'.$link.'/style/css/leftmenu.css" rel="stylesheet">
<link href="'.$link.'/style/colour/degradasi.css" rel="stylesheet">
<script src="'.$link.'/style/js/jquery.js"></script>
</head>');};

function headinglogin($link=NULL,$warna=NULL){
echo  preg_replace('/\r|\n|[\	]/','','<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<link href="'.$link.'/images/icon/jateng.png" rel="icon">
<link href="'.$link.'/images/icon/jateng.png" rel="apple-touch-icon">
<link href="'.$link.'/style/css/afia1.css" rel="stylesheet">
<link href="'.$link.'/style/css/signin.css" rel="stylesheet">
</head>');};

function breadcrumb($link=NULL,$title=NULL,$judul=NULL,$icon=NULL,$fluid=NULL){
return '
<section class="breadcrumbs" data-sempak="bolong" data-cawet="'.ucwords(strtolower($judul)).'">
	<div class="container'.$fluid.'">
		<div class="d-flex justify-content-between align-items-center">
		<h2>
			<i class="'.$icon.'"></i> '.strtoupper($judul).'
		</h2>
		<ol>
			<li>
				<a href="'.$link.'">Home</a>
			</li>
			<li>'.$title.'</li>
		</ol>
	</div>
	</div>
</section>';}; 

function message($message=NULL,$fluid=NULL){
	switch($message){
		default:
		$keterangan='';
		break;		
		case 'suksesreg':
		$keterangan='	
<div class="alert bg-success alert-dismissable text-white"><i class="fa fa-check"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
<b>Sukses!</b> Data telah dikirim dan akan diproses</div>';			
		break;
		case 'sukses':
		$keterangan='	
<div class="alert bg-success alert-dismissable text-white"><i class="fa fa-check"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
<b>Sukses!</b> Proses Anda berhasil...
</div>';			
		break;
		case 'gagal':
		$keterangan='	
<div class="alert bg-danger alert-dismissable text-white"><i class="fa fa-ban"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
<b>Maaf..</b> Proses gagal/ada data sama!</div>';
		break;
		case 'kosong':
		$keterangan='	
<div class="alert bg-danger alert-dismissable text-white"><i class="fa fa-ban"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
<b>Gagal..</b> Proses gagal,Data yang anda masukan belum terisi, Silahkan Ulangi!</div>';
		break;		
		case 'jumlah':
		$keterangan='	
<div class="alert bg-danger alert-dismissable text-white"><i class="fa fa-ban"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Gagal..</b> Jumlah melebihi stok yang ada!,silahkan cek!</div>';
		break;
		case 'plagiat':
		$keterangan='	
<div class="alert bg-warning alert-dismissable text-white"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Maaf..</b> Proses input gagal. Ada kesamaan data dalam proses input!</div>';
		break;
		case 'ekstensi':
		$keterangan='	
<div class="alert bg-warning alert-dismissable"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>  
<b>Maaf..</b> Proses input gagal. Format Extentesi File Salah!</div>';
		break;
		case 'large':
		$keterangan='	
<div class="alert bg-warning alert-dismissable"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Maaf..</b> Upload file melebihi batas! Max Upload/ format file salah!</div>';
		break;
		case 'koreksi':
		$keterangan='
<div class="alert bg-warning alert-dismissable text-white"><i class="fa fa-warning"></i> 
<b>Login Gagal..</b> Koreksi Username dan Password Anda</div>';
		break;
		case 'fail':
		$keterangan='	
<div class="alert bg-warning alert-dismissable text-white"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Maaf..</b> Data Sudah Terinput/berkaitan dengan Transaksi yang lain, Silahkan Cek!!</div>';
		break;
		case 'salah':
		$keterangan='	
<div class="alert bg-warning alert-dismissable text-white"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Maaf..</b> Data Yang Anda Inputkan Salah, Silahkan lakukan koreksi!!</div>';
		break;
		case 'captchasalah':
		$keterangan='	
<div class="alert bg-warning alert-dismissable text-white"><i class="fa fa-warning"></i>
<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button> 
<b>Maaf..</b> Captcha Yang Anda Inputkan Salah, Silahkan lakukan koreksi!!</div>';
		break;
	};
		return '<div class="container'.$fluid.'">'.$keterangan.'</div>';}; 
	
function tab_1(){
$tab	= '
		<ul class="nav nav-tabs nav-pills" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-toggle="tab" href="#tabeldata" role="tab" aria-selected="true">
					<span class="fa fa-list-alt"></span> Tabel
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#insertdata" role="tab" aria-selected="false">
					<span class="fa fa-pencil-square"></span> Tambah
				</a>
			</li>
		</ul>';
return $tab;}; 

function uang($number) {
	switch(TRUE){
			case(!empty($number)):
				$bilangan = number_format($number,2,",","."); 
				return $bilangan;
			break;
			default:
				$bilangan = '-';
				return $bilangan;
			break;};};

function rupiah($number) {
		switch(TRUE){
			case(!empty($number)):
				$bilangan = number_format($number, 0, ",", "."); 
				return 'Rp. '.$bilangan.", 00";
			break;
			default:
				$bilangan = $number;
				return 'Rp. '.$bilangan.", 00";
			break;};};
 
function telp($number) {
		switch(TRUE){
			case(!empty($number)):
				$bilangan = '+62'.number_format($number, 0, ",", " "); 
				return $bilangan."";
			break;
			default:
				$bilangan = '+62'.$number;
				return $bilangan;
			break;
		};}; 

function indotgl($tgl) {
	$tanggal = explode("-",$tgl);
	$hari = $tanggal[2];
	$hari = explode(' ',$hari);
	switch(TRUE){
	case(empty($hari[1])): $jam = '';break; default: $jam = $hari[1]; break;};
	$ar_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
	
	switch(TRUE){case(empty($hari[0])): $hari = ''; break; default: $hari = $hari[0]; break;};
	switch(TRUE){case(empty($ar_bulan[abs($tanggal[1])])): $bulan = ''; break; default: $bulan = $ar_bulan[abs($tanggal[1])]; break;};
	switch(TRUE){case(empty($tanggal[0])): $tahun = ''; break; default: $tahun = $tanggal[0]; break;};

	$tanggal = $hari.' '.$bulan.' '.$tahun.' '.$jam;
	switch(TRUE){
	case($tahun == '0000'):
		return ' ';
	break;
	default:
		return $tanggal;
	break;};}; 

function intgl($tgl) {
	$tanggal = explode("-",$tgl);
	$hari = $tanggal[2];
	$hari = explode(' ',$hari);
	switch(TRUE){
	case(empty($hari[1])): $jam = '';break; default: $jam = $hari[1]; break;};
	$ar_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
	
	switch(TRUE){case(empty($hari[0])): $hari = ''; break; default: $hari = $hari[0]; break;};
	switch(TRUE){case(empty($ar_bulan[abs($tanggal[1])])): $bulan = ''; break; default: $bulan = $ar_bulan[abs($tanggal[1])]; break;};
	switch(TRUE){case(empty($tanggal[0])): $tahun = ''; break; default: $tahun = $tanggal[0]; break;};

	$tanggal = $hari.' '.$bulan.' '.$tahun;
	switch(TRUE){
	case($tahun == '0000'):
		return '~';
	break;
	default:
		return $tanggal;
	break;};};
 
function tgl ($tgl) {
	switch(TRUE){case(!empty($tgl)):
	$tanggal = explode("-",$tgl);
	$tahun = $tanggal[0];
	$bulan = $tanggal[1];
	$ar_hari = explode(' ',$tanggal[2]);
	$hari = $ar_hari[0];
	switch(TRUE){case(empty($ar_hari[1])): $jam = ''; break; default: $jam = $ar_hari[1]; break;};
	$tanggal = $hari.'-'.$bulan.'-'.$tahun.' '.$jam;
	$tanggal = trim($tanggal);
	return $tanggal;
	break;
	default:
		$tanggal = $tgl;
		return $tgl;
	break;};}; 

function kalender ($tgl) {
	switch(TRUE){case(!empty($tgl)):
	$tanggal = explode("-",$tgl);
	$tahun = $tanggal[0];
	$bulan = $tanggal[1];
	$ar_hari = explode(' ',$tanggal[2]);
	$hari = $ar_hari[0];
	switch(TRUE){case(empty($ar_hari[1])): $jam = ''; break; default: $jam = $ar_hari[1]; break;};
	$tanggal = $hari.'/'.$bulan.'/'.$tahun.' '.$jam;
	$tanggal = trim($tanggal);
	return $tanggal;
	break;
	default:
		$tanggal = $tgl;
		return $tgl;
	break;}}; 
	
function Terbilang($x){
  $abil = array(" ", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
  switch(TRUE){
	  	case($x < 12):
    		return " " . $abil[$x];
		break;
  		case($x < 20):
    		return Terbilang($x - 10) . " Belas";
		break;
  		case($x < 100):
    		return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
		break;
  		case($x < 200):
   			return " Seratus" . Terbilang($x - 100);
  		break;
		case($x < 1000):
    		return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  		break;
		case($x < 2000):
    		return " Seribu" . Terbilang($x - 1000);
 		break;
		case($x < 1000000):
    		return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
		break;
  		case($x < 1000000000):
    		return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
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
	return $bulan;};
	
function umur($tanggal){
$birth = new datetime($tanggal);
$today = new datetime('today');
switch(TRUE){
	case $birth > $today: 
	exit(intval('0'));
	break;}
$tahun = $today->diff($birth)->y;
return intval($tahun);};?>