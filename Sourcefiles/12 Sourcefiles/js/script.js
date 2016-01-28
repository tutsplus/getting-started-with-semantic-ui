$(function(){

	var rel = $('body[rel]').attr('rel');

	$('#menu a:eq('+ rel +') , #m_menu a:eq('+ rel +')').addClass('active');

	$('#m_btn').on('click',function(){
		$('#m_menu').sidebar('toggle');
	});

	$('.pop').popup();

	$('#center div').on('click',function(){
		$('.reveal .visible').transition({animation: 'tada', duration: 300, complete:function(){ console.log('finished'); } });
		//$('.reveal .visible').transition('tada','500ms',function(){console.log('done');}).transition('pulse',600,function(){console.log('done pulse');});
	});

	$('#dimmer').dimmer({on: 'hover'});

	$('#dimmer').on('click',function(){
		$('.page.dimmer').dimmer('show',function(){console.log('finished');});
	});
});