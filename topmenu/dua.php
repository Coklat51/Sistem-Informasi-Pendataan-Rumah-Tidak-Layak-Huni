<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
$isinotif	= $record->ngetoke('bukunotif','COUNT(user_email) AS jumlah',NULL,'user_email="'.$sesi['kdlevelku'].'" AND notif_status="1"');
switch(TRUE){
	case $isinotif->num_rows > 0:
		$pecah 	= $isinotif->fetch_object();
		$jumlah = $pecah->jumlah;
	break;
	default:
		$jumlah =0;
	break;
}
echo preg_replace('/\r|\n|[\	]/','','
<body>
<section id="header" data-perkosa=" '.ucwords(strtolower($app->namalicense)).'">
	<section id="topbar">
		<div class="container clearfix">
			<div class="contact-info float-left">
				<a href="'.$base['url'].'" class="kintilmu" data-placement="bottom" title="Beranda">
					<i class="fa fa-home"></i>
				</a>
			</div>
			<div class="social-links float-right">
				<a href="'.$base['aksi'].md5($base['kunci'].'keluar').'" class="kintilmu" data-placement="bottom" title="Logout">
					<i class="fa fa-unlock"></i>
				</a>
			</div>
		</div>
	</section>
	<div class="container">
		<div id="logo" class="pull-left">
			<img src="'.$base['url'].'/'.$app->logolicense.'"/>
			<h1>'.$app->namalicense.'</h1>
		</div>
		<nav id="afinav-menu-container">
			<ul class="afinav-menu">
				<li>
					<a href="#" class="pengen-kentu" data-kelon="'.md5($base['kunci'].'notif').'" data-kentu="Kategori Menu" 
					data-crot="'.$base['getlink'].md5($base['kunci'].'slidenotifikasi').'">
					<i class="fa fa-bell"></i><span class="badge badge-danger">'.$jumlah.'</span><span>Notice</span>
					</a>
				</li>
				<li>
					<a href="#" class="pengen-kentu" data-kelon="'.md5($base['kunci'].'menuslide').'" 
					data-crot="'.$base['linkget'].md5($base['kunci'].'slidemenu').'">
					<i class="fa fa-windows"></i> <span>Menu</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</section>
<main id="main" style="margin: 0;">
');?>