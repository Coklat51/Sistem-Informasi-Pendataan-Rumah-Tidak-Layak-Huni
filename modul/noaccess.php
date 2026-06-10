<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n|[\	]/','','
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<title>NOT FOUND - '.ucwords(strtolower($app->perusahaanlicense)).'</title>
<link href="'.$base['url'].'/'.$app->logolicense.'" rel="icon">
<link href="'.$base['url'].'/'.$app->logolicense.'" rel="apple-touch-icon">
<link href="'.$base['url'].'/style/css/afia1.css" rel="stylesheet">
<body>
	<main id="main">
		<div class="page-wrap d-flex flex-row align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<span class="display-1 d-block">not found!</span>
						<div class="mb-4 lead">Maaf, Halaman yang Anda cari tidak ditemukan silahkan kembali ke Beranda</div>
						<a href="'.$base['url'].'" class="btn btn-link">Kembali ke Beranda</a>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
');?>