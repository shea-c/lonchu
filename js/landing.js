if($(window).width()>800){
	$('img').each(function(){
		$(this).attr('src', $(this).attr('src').replace('_ld', '_hd'));
	});
	$('.image').each(function(){
			$(this).css('background-image', $(this).css('background-image').replace('_ld', '_hd'));
	});
}
$('#navigation_toggle_open').click(function(){
	$('body').animate({'margin-left':'-40%'}, 300);
	$('#navigation').animate({'right':'-0%'}, 300);
});
$('#navigation_toggle_close').click(function(){
	$('body').animate({'margin-left':'0%'}, 300);
	$('#navigation').animate({'right':'-40%'}, 300);
});