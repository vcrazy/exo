$(document).ready(function(){
	$('div.page').not(':first').hide();

	$('#menu li[id^=menu_] a').click(function(){
		$('.page').hide();
		$('#page_' + $(this).parent().attr('id')).show();

		return true;
	});
});
