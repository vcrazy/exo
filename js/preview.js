$(document).ready(function(){
	$('#menu li[id^=menu_] a').click(function(){
		$('.page').hide();
		$('#page_' + $(this).parent().attr('id')).show();

		return true;
	});
});
