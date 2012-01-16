$(document).ready(function(){
	$('#menu li').click(function(){
		alert('wow menu click!');

		return false;
	});

	$('a.message').click(function(){
		return confirm('Сериозно ли?');
	});

	$('#menu li').mouseover(function(){
		$(this).css('color', 'white');
	});

	$('#menu li').mouseout(function(){
		$(this).css('color', 'black');
	});

	$('#test').click(function(){
		window.location.href='/register/step1';
	});
        
        $('#toregister').click(function(){
           window.location.href='/register/step4';
       })

       $('textarea').ckeditor();
//	$('body').click(function(){
//		if($(this).hasClass('black-bg')){
//			$(this).removeClass('black-bg')
//		}else{
//			$(this).addClass('black-bg');
//		}
//	});

	$('body').append('<span id="pf" style="color: blue; border: 1px solid red;">a</span><div id="testdiv" style="width: 400px; height: 100px; background-color: red;">yrdy</div><div style="height: 200px;">dawwd</div>');
	$('span#pf').click(function(){
//		$('#testdiv').animate({width: 'toggle', opacity: 'toggle'}, 2000);
		$('#testdiv').css('borderRadius', '50	px');
	});
});

//var neshto = document.getElementById('testid');
//var neshtodve = document.getElementsByName('elementname');