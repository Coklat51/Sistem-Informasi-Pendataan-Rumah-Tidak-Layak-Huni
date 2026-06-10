<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
$login	= array();
switch(TRUE){
	case !empty($curl['dua']) && $curl['dua']=='koreksi':
		$login['isi']	= 'Koreksi email dan password Anda';
		$login['warna']	= 'text-warning';
	break;
	default:
		$login['isi']	= 'Silahkan masukan akun Anda';
		$login['warna']	= '';
	break;};
echo preg_replace('/\r|\n|[\	]/','','
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="descriptison">
<meta content="" name="keywords">
<title>LOGIN - '.ucwords(strtolower($app->perusahaanlicense)).'</title>
<link href="'.$base['url'].'/'.$app->logolicense.'" rel="icon">
<link href="'.$base['url'].'/'.$app->logolicense.'" rel="apple-touch-icon">
<link href="'.$base['url'].'/style/css/afia1.css" rel="stylesheet">
<link href="'.$base['url'].'/style/css/signin.css" rel="stylesheet">
<body>
	<main id="main">
		<div class="limiter" id="login">
			<div class="container-login100" style="background-image:url('.$base['url'].'/images/default/masuk.jpg)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-sm-12"></div>
						<div class="col-sm-5 col-md-offset-1 animated slideInUp">
							<div class="login_topimg"></div>
							<div class="wrap-login100">
								<form class="login100-form validate-form" method="post" 
								action="'.$base['aksi'].md5($base['kunci'].$curl['satu']).'">
									<span class="login100-form-subtitle m-b-16 '.$login['warna'].'">'.$login['isi'].'</span>
									<div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="username" placeholder="Username" 
										value="'.$cookie['username'].'">
										<span class="focus-input100"></span> <span class="symbol-input100"><span class="fa fa-user"></span></span> 		
									</div>
									<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
										<input class="input100" type="password" name="pass" placeholder="Password" value="'.$cookie['pass'].'">
										<span class="focus-input100"></span>
										<span class="symbol-input100"><span class="fa fa-lock"></span></span>
									</div>
									<div class="container-login100-form-btn p-t-25">
										<button class="login100-form-btn btn-primary" name="AFI" value="'.md5($base['kunci'].'login').'" 
										type="submit"> Masuk</button>
										<a class="login100-form-btn btn-danger" href="'.$base['url'].'"> Kembali</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>');?>