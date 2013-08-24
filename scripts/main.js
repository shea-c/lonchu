$('#navigation_open').click(function(){
	$('body').animate({'margin-left':'-60%','margin-right':'60%'}, 500);
	$('#navigation').animate({'margin-left':'-60%'}, 500);
});
$('#navigation_close').click(function(){
	$('body').animate({'margin-left':'0','margin-right':'0'}, 500);
	$('#navigation').animate({'margin-left':'0'}, 500);
});
var retina_query="only screen and (-moz-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen  and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)";
var queries_work_and_is_retina=(window.matchMedia && window.matchMedia(retina_query).matches);
var do_retina=(window.devicePixelRatio>1.3 || queries_work_and_is_retina );
if( $(document).width()>1000 || ( $(document).width()>600 && do_retina) ){
	$('.responsive_image').each(function(){
		if($(this).is('img')){
			$(this).attr('src', $(this).attr('src').replace('.ld.','.hd.'));
		}else{
			$(this).css('background-image', $(this).css('background-image').replace('.ld.','.hd.'));
		}
	});
}
