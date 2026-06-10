<?php if (!defined('AFISYNTAX')) die('LOE NGAPAIN ANJING!!!!');
switch(TRUE){
case file_exists('themes/topmenu.php') && file_exists('themes/footer.php'):  
break;
default:
die(header('location: '.$base['url'].'/404'));
break;};
headings($base['url'], $app->warnalicense, $app->logolicense);
require('themes/topmenu.php');
require('modul/nonuser/home/dashboard.php');
require('themes/footer.php');
echo preg_replace('/\r|\n|[\	]/', '', '
<script type="text/javascript" src="'.$base['url'].'/style/js/setup.js"></script>
<script type="text/javascript" src="'.$base['url'].'/style/js/highcharts.js"></script>
</body>
</html>');?>