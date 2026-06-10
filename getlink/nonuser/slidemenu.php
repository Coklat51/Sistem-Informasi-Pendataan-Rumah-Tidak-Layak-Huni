<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n/','','
	<div class="container afi-header d-print-none">
		<h5 class="mb-0 pt-2 judule"><i class="fa fa-info-circle"></i> KATEGORI MENU</h5>
		<a class="close-menu" href="#"><i class="fa fa-close"></i></a>
	</div>
	<div class="afi-menu">');
switch($base['afi']){
default:
echo preg_replace('/\r|\n/','','
	<div class="text-center">
		<h4>No result</h4>
	</div>');
break;
case md5($base['kunci'].'menuslide'):
$query = $record->ngetoke('menuslide','id, menu, icon, link, warna, target',NULL,'id<>"0" AND '.$base['menu'].'','id ASC'); 
$base['active'] = '';
$base['menuactive'] = ''; 
echo preg_replace('/\r|\n|[\	]/','','
	<div class="container">
		<div class="row">
			<div class="col-lg-12">');
while($data = $query->fetch_object()){ 
	switch(TRUE){ 
		case ($data->target == 0 && empty($base['active'])):
echo preg_replace('/\r|\n|[\	]/','','
				<div class="section-header mb-1 mt-3">
					<h2 class="'.$data->warna.' mb-0 mymenu"><i class="'.$data->icon.' menu-icon '.$data->warna.'"></i> '.$data->menu.'</h2>
				</div>
				<ul class="nav nav-list">');
		$base['active']		= $data->id;
		$base['menuactive']	= $data->link;
		break;
		case ($data->target <> 0 && !empty($base['active'])):
echo preg_replace('/\r|\n|[\	]/','','		
					<li class="nav-item">
						<a id="menuku" class="'.$data->warna.'" href="'.$base['url'].'/'.$base['menuactive'].'/'.$data->link.'">
							<span class="menu-text"><i class="'.$data->icon.' menu-icon"></i> '.$data->menu.'</span>
						</a>
					</li>');
		break;
		case ($data->target== 0 && !empty($base['active'])):
echo preg_replace('/\r|\n|[\	]/','','
				</ul>
				<div class="section-header mb-1">
					<h2 class="'.$data->warna.' mb-0 mymenu"><i class="'.$data->icon.' menu-icon '.$data->warna.'"></i> '.$data->menu.'</h2>
				</div>
				<ul class="nav nav-list mb-3">');
		$base['active']		= $data->id;
		$base['menuactive']	= $data->link;
		break; };};		
echo preg_replace('/\r|\n|[\	]/','','
				</ul>
			</div>
		</div>
	</div>');
break;};
echo preg_replace('/\r|\n/','','
	</div>
	<div class="text-center pt-5" id="no-print">Designed by <a href="https://kecamatangunungwungkal.co.id/">Kecamatan Gunungwungkal.co.id</a></div>');?>