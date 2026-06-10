<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
echo preg_replace('/\r|\n|[\	]/','','
<div class="container tengah animated slideInLeft">
<h1 class="mb-1 besar-font-h font-weight-bold">'.$app->namalicense.'</h1>
<p class="lead besar-font-p font-weight-bold">'.strtolower($app->perusahaanlicense).'</p>
<p class="besar-font-p">Selamat datang di SIP-RTLH, ini adalah sistem informasi</p>
<p class="besar-font-p">yang digunakan untuk mengelola data RTLH</p>
</div>');?>