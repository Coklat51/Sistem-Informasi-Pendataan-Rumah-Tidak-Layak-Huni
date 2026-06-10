<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!!');
$query	=	$record->ngetoke('menuslide','menu,title,icon',NULL,'active="'.$curl['dua'].'" AND '.$base['menu'].'');	
switch(TRUE){
	case $query->num_rows > 0:
		$row	= $query->fetch_object();
	break;
	default:
		die(header('location: '.$base['url'].'/404'));
	break;};
echo preg_replace('/\r|\n|[\	]/','',
breadcrumb($base['url'],$row->menu,$row->title,$row->icon).
message($curl['tiga']).'
<section class="page pt-2">
	<div class="container">
		<div class="tab-content" id="myTabContent">
			<div class="row tab-pane fade show active pt-2" id="tabeldata" role="tabpanel">
				<div class="col-md-12 pb-4 animated slideInUp">
						<table id="afi" data-link="'.$base['data'].md5($base['kunci'].$curl['dua']).'" class="table table-striped table-bordered" 
					style="width:100%; font-size:12px">
							<thead class="text-center">
								<tr>
									<th>No.</th>
									<th>Tanggal</th>
									<th>Jenis</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Deskripsi</th>
									<th>No. Telp</th>
									<th>Status</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>');?>