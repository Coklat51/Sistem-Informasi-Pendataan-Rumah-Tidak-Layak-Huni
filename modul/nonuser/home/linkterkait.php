<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
$query	= $record->ngetoke('linkterkait','*',NULL,NULL,'rand()');
$menu	= '';
switch(TRUE){
	case $query->num_rows > 0:
		while($data	= $query->fetch_object()){
			$menu	.= '
				<a class="card border-0" href="'.$data->urllinkterkait.'" target="_blank">
				<img class="card-img-top align-self-center my-2 p-0" src="'.$base['url'].'/'.$data->fotolinkterkait.'" style="width: 100px">
				<div class="card-body mt-0 p-2">
					<p class="font-weight-bold mb-1 text-center">'.$data->deskripsilink.'</p>
				</div>
				</a>';};
	break;
	
	};
echo preg_replace('/\r|\n|[\	]/','','
<div class="col-md-10 offset-md-1 text-center">
	<h2 class="text-uppercase text-muted font-weight-bold" style="font-size:16px;">Link Terkait</h2>	
</div>
<div class="terkait-afi owl-carousel mb-5">'.$menu.'</div>');;