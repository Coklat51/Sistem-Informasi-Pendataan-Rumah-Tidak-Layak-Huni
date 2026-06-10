<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('menuslide','menu,title,icon',NULL,'active="'.$curl['satu'].'" AND '.$base['menu'].'');	
switch(TRUE){
	case $query->num_rows > 0:
		$row	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
echo preg_replace('/\r|\n|[\	]/','',
breadcrumb($base['url'],$row->menu,$row->title,$row->icon).
message($curl['dua']).'
<section class="page pt-2">
	<div class="container">
		<div class="row px-2 animated slideInUp fast">
			<div class="col-md-8 mb-4 shadow-sm pb-4 pt-2 rounded">
				<div class="section-header">
					<h2 class="mb-2 birutua">Kritik dan Saran</h2>
					<p class="text-justify" style="font-size:14px">Silahkan mengisi form dibawah ini, jika Anda mengalami permasalahan maupun ingin melapor atau memberikan kritik dan saran</p>
				</div>');
				startForm('row','post',$base['aksi'].md5($base['kunci'].$curl['satu']));
				?><div class="form-group col-sm-6 px-0"><?php
					inputText('Nama Anda','tentangkami_nama');
				?></div><div class="form-group col-sm-6 px-0"><?php
					telpText('No. telephone/handphone(+62)','tentangkami_telp',NULL,'placeholder="8111111111111"');
				?></div><div class="form-group col-sm-6 px-0"><?php
					inputText('Email Anda','tentangkami_email');
				?></div><div class="form-group col-sm-6"><?php
					selectBase('Kategori','kdjenistentangkami','instrumentjenistentangkami','kdjenistentangkami','jenistentangkami',
					NULL,$base['user'],$base['name'],$base['pass'],$base['host']);
				?></div><div class="form-group col-sm-12 px-0"><?php
					textareaText('Pesan anda','tentangkami_deskripsi');
				?></div><?php 
					SendText($base['kunci']);
					endForm();
				?></div><?php
echo preg_replace('/\r|\n|[\	]/','','
	<div class="col-md-4 mb-4 shadow-sm pb-4 pt-2 rounded-lg">
		<div class="section-header">
			<h2 class="mb-1 birutua">Kontak Kami</h2>
		</div>
		<ul class="list-group border-0 m-0 p-0" style="font-size:14px;">
			<li class="list-group-item border-0 p-1">Silakan menghubungi kami untuk informasi lebih lanjut</li>
			<li class="list-group-item border-0 p-1"><span class="fa fa-map-marker"></span> '.$app->alamatlicense.'</li>
			<li class="list-group-item border-0 p-1"><span class="fa fa-phone-square"></span> '.telp($app->telplicense).'</li>
			<li class="list-group-item border-0 p-1"><span class="fa fa-envelope"></span> '.$app->emaillicense.'</li>
		</ul>
	</div> 
	<div class="col-md-12">'.$app->petalicense.'</div>
</div></div></section>');?>