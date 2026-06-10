<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n|[\	]/','','
<section data-sempak="bolong" data-cawet="Beranda" class="pt-0">
		<div class="row">
			<div class="col-md-12 jumbotron py-5" style="background: url('.$base['img'].') no-repeat; 
			background-size: cover; min-height: 90vh; background-position: right; color: #FFFFFF;">');
			require('modul/nonuser/home/jumbroton.php');
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">');
				require('modul/nonuser/home/jumlahdata.php');
echo preg_replace('/\r|\n|[\	]/','','
				</div>
			</div>
		</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 animated bounceInUp">');
				require('modul/nonuser/home/linkterkait.php');
echo preg_replace('/\r|\n|[\	]/','','
			</div>
		</div>
	</div>
</section>');
?>