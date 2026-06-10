$(".link-afi").owlCarousel({
	loop		:true, 
	margin		:10,  
	dots		:false, 
	responsive	:{
					0	:{
							items:2,
							stagePadding:25 
					}, 
					600	:{
							items:4
					}, 
					1000:{
							items:5, 
							nav:true, 
							autoplay: true
					}
				}
});
$(".menu-afi").owlCarousel({
	loop		:true, 
	margin		:10, 
	dots		:false, 
	responsive	:{
					0	:{
							items:1,
							stagePadding:25 
					}, 
					600	:{
							items:2
					}, 
					1000:{
							items:3, 
							nav:true, 
							autoplay: true
					}
				}
});
$(".infosiaran-afi").owlCarousel({
	loop		:true, 
	margin		:10, 
	dots		:false, 
	responsive	:{
					0	:{
							items:1,
							stagePadding:25 
					}, 
					600	:{
							items:2
					}, 
					1000:{
							items:3, 
							nav:true, 
							autoplay: true
					}
				}
});
$(".help-afi").owlCarousel({
	margin		:10, 
	dots		:false, 
	responsive	:{
					0	:{
							loop:true, 
							items:2,
							mouseDrag: true,
							stagePadding:25
					}, 
					600	:{
							loop:true, 
							items:3,
							mouseDrag: true,
					}, 
					1000:{
							items:4, 
							nav: false, 
							mouseDrag: false
					}
				}
});
$(".video-afi").owlCarousel({
	loop		:true, 
	margin		:10, 
	dots		:true, 
	responsive	:{
					0	:{
							items:1,
							mouseDrag: true,
							stagePadding:25 
					}, 
					600	:{
							items:2
					}, 
					1000:{
							items:3, 
							nav:true, 
							autoplay: false
					}
				}
});
$(".terkait-afi").owlCarousel({
	margin		:10, 
	dots		:false, 
	responsive	:{
					0	:{
							loop:true, 
							items:3,
							mouseDrag: true,
							stagePadding:25
					}, 
					600	:{
							loop:true, 
							items:4,
							mouseDrag: true,
					}, 
					1000:{
							loop:true,
							items:6, 
							nav: false, 
							mouseDrag: false,
							autoplay: true
					}
				}
});