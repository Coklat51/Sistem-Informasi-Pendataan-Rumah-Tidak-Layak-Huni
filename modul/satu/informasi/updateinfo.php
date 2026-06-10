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
	<div class="container">'.
	tab_1().'
		<div class="tab-content" id="myTabContent">
			<div class="row tab-pane fade show active pt-2" id="tabeldata" role="tabpanel">
				<div class="col-md-12 pb-4 animated slideInUp">
						<table id="afi" data-link="'.$base['data'].md5($base['kunci'].$curl['dua']).'" class="table table-striped table-bordered" 
					style="width:100%; font-size:12px">
							<thead class="text-center">
								<tr>
									<th>No.</th>
									<th>Judul Berita</th>
									<th>Url Berita</th>
									<th>Tanggal Berita</th>
									<th>Foto Berita</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
				</div>
			</div>
			<div class="tab-pane fade pt-4" id="insertdata" role="tabpanel">
				<div class="row">
					<div class="col-md-6 offset-md-3">');
						startForm('row','post',$base['aksi'].md5($base['kunci'].$curl['dua']));
						?><div class="form-group col-sm-12"><?php
							inputText('Judul Berita','judulberita');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Url Berita','urlberita');
						?></div><div class="form-group col-sm-12"><?php
							inputText('Tanggal Berita(Th-bln-tgl)','tglberita');
						?></div><div class="form-group col-sm-12"><?php
							upfoto('Foto Berita','fotoberita',$base['upload']);
						?></div><?php
							SaveText();
							endForm();
echo preg_replace('/\r|\n|[\	]/','','
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
</div>');?>