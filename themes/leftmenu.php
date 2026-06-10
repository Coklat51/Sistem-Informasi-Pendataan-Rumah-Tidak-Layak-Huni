<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
$query			=	$record->ngetoke('menuleft','menu,title,icon,link,target,active',NULL,'target="'.$curl['satu'].'" AND '.$base['menu'].'');
$kiri			= array();
$kiri['left']	=	'';
$kiri['menu']	=	'';
$kiri['title']	=	'';
$kiri['icon']	=	'';
switch(TRUE){
	case $query->num_rows > 0:
	while($row	=	$query->fetch_object()){
	switch(TRUE){
		case $curl['dua']==$row->active && !empty($row->active):
			$kiri['left']	.=	'<li class="nav-item disabled">
									<a class="nav-link disabled" href="'.$base['url'].'/'.$row->link.''.$curl['tiga'].'">
										<i class="'.$row->icon.'"></i> '.$row->menu.'
									</a>
								</li>';
			$kiri['menu']	.=	$row->menu;
			$kiri['title']	.=	$row->title;
			$kiri['icon']	.=	$row->icon;
		break;
		case $curl['tiga']<>$row->active && !empty($row->active):
			$kiri['left']	.=	'<li class="nav-item">
									<a class="nav-link" href="'.$base['url'].'/'.$row->link.''.$curl['tiga'].'">
										<i class="'.$row->icon.'"></i> '.$row->menu.'
									</a>
								</li>';
		break;
		default:
			$kiri['left']	.=	'<li class="nav-item">
									<a class="nav-link" href="'.$base['url'].'/'.$row->link.'">
										<i class="'.$row->icon.'"></i> '.$row->menu.'
									</a>
								</li>';
		break;};
	};
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};