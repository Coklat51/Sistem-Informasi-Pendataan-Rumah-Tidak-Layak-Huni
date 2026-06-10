<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n|\t/','','
<header class="pt-1" id="header" data-perkosa=" '.ucwords(strtolower($app->namalicense)).'">
		<div class="container">
			<div id="logo" class="pull-left">
				<img src="'.$base['url'].'/'.$app->logolicense.'"/>
				<h1>'.strtoupper($app->namalicense).'</h1>
			</div>
		<nav id="nav-menu-container"><ul class="nav-menu">');
$query = $record->ngetoke('menuslide','*',NULL,'nonuser="1"','id ASC'); 
$topbar['target']=0; 
$topbar['no'] = 1;
while($data = $query->fetch_object()){
	switch (TRUE){
		case $data->link<>'#' && $data->target=='0':
			switch(TRUE){
				case $data->link == $curl['satu'] || $data->activeedit == $curl['satu'] || $data->activecetak == $curl['satu']:
					$topbar['satu']		= '<li class="menu-active">';
					$topbar['title']	= $data->menu;
					$topbar['judul']	= strtoupper($data->title);
					$topbar['icon']		= $data->icon;
					$topbar['tiga']		= '</li>';
					$topbar['empat']	= '';
				break;
				case $data->link <> $curl['satu'] && $data->activeedit <> $curl['satu'] && $data->activecetak && $curl['satu']:
					$topbar['satu']		= '<li>';
					$topbar['tiga']		= '</li>';
					$topbar['empat']	= '';
				break;
			};
		break;
		case $data->link<>'#' && $data->target<>'0':
			switch(TRUE){
				case $data->link == $curl['dua'] || $data->activeedit == $curl['dua'] || $data->activecetak ==$curl['dua']:
					$topbar['satu']		= '<li class="menu-active">';
					$topbar['title']	= $data->menu;
					$topbar['icon']		= $data->icon;
					$topbar['judul']	= strtoupper($data->title);
					$topbar['tiga']		= '</li>';
				break;
				case $data->link <> $curl['dua'] && $data->activeedit <>$curl['dua'] && $data->activecetak <> $curl['dua']:
					$topbar['satu']		= '<li>';
					$topbar['tiga']		= '</li>';
				break;
			};
		break;
		case $data->link=='#' && $data->target=='0':
			switch(TRUE){
				case $data->active == $curl['satu']:
					$topbar['satu']		= '<li class="menu-has-children menu-active">';
					$topbar['tiga']		= '<ul>';
					$topbar['empat']	= '/'.$data->active;
				break;
				case $data->active <> $curl['satu']:
					$topbar['satu']		= '<li class="menu-has-children">';
					$topbar['tiga']		= '<ul>';
					$topbar['empat']	= '/'.$data->active;
				break;
			};
		break;};
	switch(TRUE){
		case ($topbar['target']	== $data->target):
			$topbar['first']	= NULL;
		break;
		case ($topbar['target']	<> $data->target && $topbar['target']=='0'):
			$topbar['first']	= NULL;
		break;
		case ($topbar['target']	<> $data->target && $topbar['target']<>'0'):
			$topbar['first']	= '</ul></li>';
		break;};
	switch(TRUE){
		case ($topbar['no']	== $query->num_rows && $data->target<>'0'):
			$topbar['end']	= '</ul></li>';
		break;
		default:
			$topbar['end']	= NULL;
		break;};
		$topbar['target']	= $data->target;
		$topbar['no']++;
	switch(TRUE){
		case $data->link<>'#' && $data->target=='0':
			echo $topbar['first'].$topbar['satu'].'<a href="'.$base['url'].'/'.$data->link.'">'.$data->menu.'</a>'.$topbar['tiga'].$topbar['end'];
		break;
		case $data->link<>'#' && $data->target<>'0':
			echo $topbar['first'].$topbar['satu'].'<a class="items-r" href="'.$base['url'].$topbar['empat'].'/'.$data->link.'">'.$data->menu.'</a>'.$topbar['tiga'].$topbar['end'];
		break;
		case $data->link=='#' && $data->target=='0':
			echo $topbar['first'].$topbar['satu'].'<a href="#">'.$data->menu.'</a>'.$topbar['tiga'].$topbar['end'];
		break;};};
echo preg_replace('/\r|\n|\t/','','
			</ul>
		</nav>
	</div>
</header><main id="main" style="margin: 0;">');?>