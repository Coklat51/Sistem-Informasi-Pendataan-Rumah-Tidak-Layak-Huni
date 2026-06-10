<?php if (!defined('AFISYNTAX')) die('Access Denied'); ?>
<?php 
function lengkap_alert($niknya,$_user,$_name,$_pass,$host){
$get_rec	  = new lahir;
$get_rec->ngeces($_user,$_name,$_pass,$host);
$query		= $get_rec->kueri('
	SELECT data_warga.nik FROM `data_warga`  
		JOIN aspek_keselamatan 	b ON data_warga.nik=b.nik 
	WHERE 
		data_warga.nik = "'.$niknya.'" AND b.kd_pondasi <> 0 AND b.kd_rangka <> 0 AND 
		b.kd_kond_dinding <> 0 AND b.kd_kond_lantai <> 0 AND b.kd_bahan_atap <> 0 AND
		b.kd_bahan_dinding <> 0 AND b.kd_bahan_lantai <> 0');
switch(TRUE){
	case $query->num_rows == 1:
		$alert = '<div class="p-3 mb-2 bg-success text-white">DATA SUDAH LENGKAP</div>'; 
	break;
	default: 
		$alert = '<div class="p-3 mb-2 bg-danger text-white">DATA BELUM LENGKAP</div>'; 
	break;
}
$get_rec->nutup();
	return $alert;
}; 

function kondisinya($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 0;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 5;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 7;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 10;
			return $laporan;
		break;
		default:
			$laporan	= 0;
		return $laporan;
	break;};};
function status_huni($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai >= 60:
    		$laporan	= 'TIDAK LAYAK HUNI';
			return $laporan;
		break;
		default:
			$laporan	= 'LAYAK HUNI';
		return $laporan;
	break;};};
function dinding($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 15;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 20;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 20;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 20;
			return $laporan;
		break;
		default:
			$laporan	= 0;
		return $laporan;
	break;};};
function atap($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 15;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 15;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 20;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 20;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 20;
			return $laporan;
		break;
		default:
			$laporan	= 0;
		return $laporan;
	break;};};
function lantai($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 10;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 15;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 20;
			return $laporan;
		break;
		default:
			$laporan	= 0;
		return $laporan;
	break;};};
function jawabmiliknya($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 0;
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 10;
			return $laporan;
		break;
		default:
			$laporan	= 0;
		return $laporan;
	break;};};

function hubkel($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'KEPALA RUMAH TANGGA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'ISTRI/ SUAMI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'ANAK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'MENANTU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'CUCU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'ORANG TUA/ MERTUA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'PEMBANTU RUMAH TANGGA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function cantum($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'YA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function agama($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'ISLAM';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'KRISTEN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'KATHOLIK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'HINDHU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'BUDHA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'KONGHUCU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function statuskawin($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'BELUM KAWIN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'KAWIN/ NIKAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'CERAI HIDUP';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'CERAI MATI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'HIDUP BERSAMA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function aktanikah($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK MEMILIKI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'YA, DAPAT DITUNJUKKAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'YA, TIDAK DAPAT DITUNJUKKAN';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function statustinggal($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK TINGGAL BERSAMA, BERADA DILUAR KOTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'TIDAK TINGGAL BERSAMA, BERADA DIDALAM KOTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'TINGGAL BERSAMA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function identitas($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK MEMILIKI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'KTP';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'SIM';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'KARTU PELAJAR';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'AKTA KELAHIRAN';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function statusbangunan($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'MILIK SENDIRI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'KONTRAK/ SEWA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'BEBAS SEWA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'DINAS';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function statuslahan($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'MILIK SENDIRI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'MILIK ORANG LAIN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'TANAH NEGARA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jenisfisik($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'RUMAH TIDAK PANGGUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'RUMAH PANGGUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'RUMAH TERAPUNG';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jenislantai($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'MARMER/ GRANIT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'KERAMIK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'PARKER/ VINIL/ PERMADANI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'UBIN/ TEGEL/ TERASO';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'KAYU/ PAPAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'SEMEN/ BATA MERAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'BAMBU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'TANAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jenisdinding($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'TEMBOK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'KAYU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'KALSIBOARD';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'TRIPLEK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'BAMBU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'SENG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function kondisidinding($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'BAGUS/ KUALITAS TINGGI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'JELEK/ KUALITAS RENDAH';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jenisatap($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'BETON/ GENTENG BETON';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'GENTENG KERAMIK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'GENTENG METAL';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'GENTENG TANAH LIAT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'ASBES';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'SENG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'SIRAP';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'BAMBU';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'JERAMI/ IJUK/ DAUN/ RUMBIA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='10':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function kondisiatap($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'BAGUS/ KUALITAS TINGGI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'JELEK/ KUALITAS RENDAH';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function sumberair($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'AIR KEMASAN BERMERK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'AIR ISI ULANG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'LEDING METERAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'LEDING ECERAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'SUMUR BOR/ POMPA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'SUMUR TERLINDUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'SUMUR TAK TERLINDUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'MATA AIR TERLINDUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'MATA AIR TAK TERLINDUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='10':
    		$laporan	= 'AIR SUNGAI/ DANAU/ WADUK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='11':
    		$laporan	= 'AIR HUJAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='12':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function caraair($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'MEMBELI ECERAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'LANGGANAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'TIDAK MEMBELI';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function sumberpenerangan($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'LISTRIK PLN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'LISTRIK NON PLN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'BUKAN LISTRIK';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function daya($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= '450 WATT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= '900 WATT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= '1.300 WATT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= '2.200 WATT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'LEBIH DARI 2.200 WATT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'TANPA METERAN';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function bbmasak($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'LISTRIK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'GAS LEBIH DARI 3 KG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'GAS 3 KG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'GAS KOTA/BIOGAS';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'MINYAK TANAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'BRIKET';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'ARANG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'KAYU BAKAR';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'TIDAK MEMASAK DIRUMAH';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function wc($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'SENDIRI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'BERSAMA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'UMUM';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'TIDAK ADA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function tpa($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'TANGKI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'SPAL';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'LUBANG TANAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'KOLAM/SAWAH/SUNGAI/DANAU/LAUT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'PANTAI/ TANAH LAPANG/ KEBUN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function partisipasingowahi($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK/BELUM PERNAH BERSEKOLAH';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'SD/SDLB/PAKET A/MI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'SMP/SMPLB/PAKET B/MTS';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'SMA/SMK/SMALB/PAKET C/MA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'PERGURUAN TINGGI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'TIDAK BERSEKOLAH LAGI';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function ijasahterakhir($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK MEMILIKI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'SD SEDERAJAT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'SMP SEDERAJAT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'SMA SEDERAJAT';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'D1/D2/D3';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'D4/S1';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'S2/S3';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function jenisdisabilitas($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK MENGALAMI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'PENGLIHATAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'PENDENGARAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'BERJALAN/NAIK TANGGA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'MENGINGAT/KONSENTRASI (PIKUN)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'MENGURUS DIRI SENDIRI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'KOMUNIKASI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'EMOSI/PERILAKU (DEPRESI/AUTIS)';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function tingkatdisabilitas($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK MENGALAMI KESULITAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'SEDIKIT KESULITAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'BANYAK KESULITAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'TIDAK BISA SAMA SEKALI';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function penyakitkronis($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK ADA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'HIPERTENSI (TEKANAN DARAH TINGGI)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'REMATIK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'ASMA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'MASALAH JANTUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'DIABETES (KENCING MANIS)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'TUBERCULOSIS (TBC)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'STROKE';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'KANKER ATAU TUMOR GANAS';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'LAINNYA (GAGAL GINJAL, PARU-PARU FLEK & SEJENISNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function lapanganusaha($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'PERTANIAN TANAMAN PADI & PALAWIJA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'HORTIKULTURA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'PERKEBUNAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'PERIKANAN TANGKAP';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'PERIKANAN BUDIDAYA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'PETERNAKAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'KEHUTANAN & PERTANIAN LAINNYA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'PERTAMBANGAN/PENGGALIAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='9':
    		$laporan	= 'INDUSTRI PENGOLAHAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='10':
    		$laporan	= 'LISTRIK, GAS & AIR';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='11':
    		$laporan	= 'BANGUNAN/KONSTRUKSI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='12':
    		$laporan	= 'PERDAGANGAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='13':
    		$laporan	= 'HOTEL & RUMAH MAKAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='14':
    		$laporan	= 'TRANSPORTASI & PERGUDANGAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='15':
    		$laporan	= 'INFORMASI DAN KOMUNIKASI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='16':
    		$laporan	= 'KEUANGAN DAN ASURANSI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='17':
    		$laporan	= 'JASA PENDIDIKAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='18':
    		$laporan	= 'JASA KESEHATAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='19':
    		$laporan	= 'JASA KEMASYARAKATAN, PEMERINTAH & PERORANGAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='20':
    		$laporan	= 'PEMULUNG';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='21':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function statuskedudukan($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'BERUSAHA SENDIRI';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'BERUSAHA DIBANTU BURUH TIDAK TETAP/BAYAR';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'BERUSAHA DIBANTU BURUH TETAP/DIBAYAR';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'BURUH/KARYAWAN/PEGAWAI SWASTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'PNS/TNI/POLRI/BUMN/BUMD/ANGGOTA LEGISLATIF';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
    		$laporan	= 'PEKERJA BEBAS PERTANIAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='7':
    		$laporan	= 'PEKERJA BEBAS NON PERTANIAN';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='8':
    		$laporan	= 'PEKERJA KELUARGA/TIDAK DIBAYAR';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function pendapatan($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'KURANG DARI/SAMA DENGAN RP. 1 JUTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
    		$laporan	= 'RP. 1 S/D RP. 1,5 JUTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
    		$laporan	= 'RP. 1,5 S/D RP. 2 JUTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
    		$laporan	= 'RP. 2 S/D RP. 3 JUTA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
    		$laporan	= 'LEBIH DARI/SAMA DENGAN RP. 3 JUTA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function bekerjaminggulalu($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
    		$laporan	= 'YA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function jawabprogram($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
			$laporan	= 'TIDAK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
			$laporan	= 'YA';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
			$laporan	= 'PERNAH MENDAPATKAN';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jawabaset($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='0':
			$laporan	= 'TIDAK';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='1':
			$laporan	= 'YA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function jawabsarpras($nilai){
	switch(TRUE){
		case isset($nilai) && $nilai=='1':
			$laporan	= 'MILIK SENDIRI(BAGUS/ KONDISI BAIK)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='2':
			$laporan	= 'MILIK SENDIRI(JELEK/ KONDISI TIDAK BAIK)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='3':
			$laporan	= 'MILIK KELOMPOK(SEWA BAYAR)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='4':
			$laporan	= 'MILIK KELOMPOK(SEWA TIDAK BAYAR)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='5':
			$laporan	= 'MILIK ORANG LAIN(SEWA BAYAR)';
			return $laporan;
		break;
		case isset($nilai) && $nilai=='6':
			$laporan	= 'MILIK ORANG LAIN(SEWA TIDAK BAYAR)';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function tempatusaha($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK ADA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'ADA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function omset($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'KURANG DARI/SAMA DENGAN RP. 1 JUTA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'RP. 1 JUTA S/D RP. 5 JUTA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='3':
    		$laporan	= 'RP. 5 JUTA S/D RP. 10 JUTA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='4':
    		$laporan	= 'LEBIH DARI/SAMA DENGAN RP. 10 JUTA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function jawabpembangunan($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'YA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'TIDAK BERLAKU';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function statuskehamilan($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'YA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};

function pesertakb($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK PERNAH';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'SEDANG';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'PERNAH';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function metodekb($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'IUD';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'MOW';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='3':
    		$laporan	= 'MOP';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='4':
    		$laporan	= 'IMPLANT';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='5':
    		$laporan	= 'SUNTIK';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='6':
    		$laporan	= 'PIL';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='7':
    		$laporan	= 'KONDOM';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='8':
    		$laporan	= 'TRADISIONAL';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function tempatkb($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'RSUP/RSUD/RS TNI/POLRI';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'RS SWASTA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='3':
    		$laporan	= 'KLINIK UTAMA/PRATAMA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='4':
    		$laporan	= 'PRAKTEK DOKTER';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='5':
    		$laporan	= 'PRAKTEK BIDAN';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='6':
    		$laporan	= 'PUSKESMAS/POSKESDES/POLINDES';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='7':
    		$laporan	= 'PUSTU/PUSLING/BIDAN DESA';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='8':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function keinginananak($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='0':
    		$laporan	= 'TIDAK INGIN PUNYA ANAK LAGI';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'YA, SEGERA(KURANG DARI 2 TAHUN)';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'YA, KEMUDIAN(LEBIH DARI 2 TAHUN)';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};
	
function alasantidakkb($nilai){
	switch(TRUE){
		case !empty($nilai) && $nilai=='1':
    		$laporan	= 'SEDANG HAMIL';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='2':
    		$laporan	= 'ALASAN FERTILITAS';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='3':
    		$laporan	= 'TIDAK MENYETUJUI KB';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='4':
    		$laporan	= 'TIDAK TAHU TENTANG KB';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='5':
    		$laporan	= 'TAKUT EFEK SAMPING';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='6':
    		$laporan	= 'PELAYANAN KB JAUH';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='7':
    		$laporan	= 'TIDAK MAMPU/MAHAL';
			return $laporan;
		break;
		case !empty($nilai) && $nilai=='8':
    		$laporan	= 'LAINNYA';
			return $laporan;
		break;
		default:
			$laporan	= 'BLANKO TIDAK DIISI';
		return $laporan;
	break;};};?>