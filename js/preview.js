$(document).ready(function(){
	var sel = window.location.hash;
	var page_exists = true;

	if(sel){
		page_exists = $('a[href="' + sel + '"]').length;
	}else{
		sel = $('#menu').find('a:first').attr('href');
	}

	if(!page_exists){
		$('div.page').not(':first').hide();
		$('#menu li a:first').removeClass('not-active').addClass('active');
	}else{
		$('#menu li a[href="' + sel + '"]').removeClass('not-active').addClass('active');
		sel = $('a[href="' + sel + '"]').parent().attr('id');
		$('div.page').not('#page_' + sel).hide();
	}

	$('#menu li[id^=menu_] a').click(function(){
		$('.page').hide();
		$('#page_' + $(this).parent().attr('id')).show();

		$('#menu li a').removeClass('active').addClass('not-active');
		$(this).removeClass('not-active').addClass('active');

		return true;
	});

	$('#footer li[id^=footer_] a').click(function(){
		return $('#menu li[id^=menu_] a[href="' + $(this).attr('href') + '"]').click();
	});
});
