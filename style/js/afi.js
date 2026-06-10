$(document).on("click",".pengen-kentu",function(){
	var getlink = $(this).data('kelon');
	var crot= window.location.origin+'/'+$(this).data('crot');
	$.ajax({
		url: crot,
		type: 'POST',
		data: '&AFI='+getlink,
		cache: false, 
		success: function(data){
			$('.layer').removeClass('animated slideOutLeft');
			$('.layer').addClass('animated slideInLeft');
			$('body').toggleClass('getactive');
			$('.layer').empty(); 
			$('.layer').html(data);
			}}); 
			return false;});
$(document).on("click",".close-menu",function(){
	$('.layer').removeClass('animated slideInLeft');
	$('.layer').addClass('animated slideOutLeft');
	$('body').removeClass('getactive'); 
	return false;}); 
$(document).ready(function(){ 
	$("#afi").DataTable({
		"bProcessing":true,
		"bServerSide":true,
		"responsive":true,
		"bSort":false,
		"sAjaxSource": window.location.origin+'/'+$("#afi").data("link"),
		"sServerMethod":"POST",
		"columnDefs":[{"width":"3%","targets":0}],
		drawCallback: function(settings){
			console.log('drawCallback'); 
			$(".kintilmu").tooltip();}});});
			$(document).ready(function(){
$("#afireport").DataTable({
		"bProcessing"	:true,
		"bServerSide"	:true,
		"responsive"	:true,
		dom				: "Bfrtip", 
		buttons			: ["pageLength","copy", "excel","csv","print"],
		"iDisplayLength": 100, 
		lengthMenu		: [[25, 50,100,500, -1 ],["25", "50","100","500", "Semua"]],
		"bSort"			: false,
		"sAjaxSource"	: window.location.origin+'/'+$("#afireport").data("link"),
		"sServerMethod"	:"POST",
		"columnDefs"	:[{"width":"3%","targets":0}],
			drawCallback	: function(settings){
			console.log('drawCallback'); 
			$(".kintilmu").tooltip();}});});
$(document).ready(function(){ 
	$("#afiall").DataTable({
		"bProcessing"	:true,
		"bServerSide"	:true,
		"responsive"	:true,
		"bSort"			:false,
		"sAjaxSource": window.location.origin+'/'+$("#afiall").data("link"),
		"sServerMethod":"POST",
		"iDisplayLength": -1,
		"columnDefs":[{"width":"3%","targets":0}],
		drawCallback: function(settings){
			console.log('drawCallback'); 
			$(".kintilmu").tooltip();}});});
$(document).ready(function(){
	$("#afibook").DataTable({
		"bProcessing"	: true,
		"bServerSide"	: true,
		"bJQueryUI"		: false,
		"responsive"	: true,
		"bSort"			: false,
		"searching"		: false,
		"iDisplayLength": 10,
		"stripeClasses"	: ["col-md-6 bd-callout bd-callout-info", "col-md-6 bd-callout bd-callout-warning"],
		"sAjaxSource"	: window.location.origin+'/'+$("#afibook").data("link"),
		"sServerMethod"	: "POST",
		"columnDefs"	: [{"width": "100%", "targets": 0}],
		drawCallback: function(settings){
			console.log('drawCallback'); 
			$(".kintilmu").tooltip();}});});
setInterval(function(){ 
var crit= window.location.origin+"/"+$(".notifku").data("crit");
 $(".notifku").empty(); 
 $(".notifku").load(crit); }, 3000);