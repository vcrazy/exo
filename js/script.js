$(document).ready(function(){
//	$('#menu li').click(function(){
//		alert('wow menu click!');
//
//		return false;
//	});

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

       $('#ckeditor').ckeditor();
       
       $("#pagescont").validate({
		rules: {
			title: "required"
                     //   ckeditor: "required"
            },
		messages: {
			title: "Please enter your title"
                     //   ckeditor : "Please fill the page content"
		}
	});
       $("#signupform").validate({
		rules: {
			domain: "required",
			password: {
				required: true,
				minlength: 5
			},
			conf_pass: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			email: {
				required: true,
				email: true
                        }
		},
		messages: {
			domain: "Please enter your domain",
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			conf_pass: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address"
		}
	});
//	$('body').click(function(){
//		if($(this).hasClass('black-bg')){
//			$(this).removeClass('black-bg')
//		}else{
//			$(this).addClass('black-bg');
//		}
//	});
//
//	$('body').append('<span id="pf" style="color: blue; border: 1px solid red;">a</span><div id="testdiv" style="width: 400px; height: 100px; background-color: red;">yrdy</div><div style="height: 200px;">dawwd</div>');
//	$('span#pf').click(function(){
////		$('#testdiv').animate({width: 'toggle', opacity: 'toggle'}, 2000);
//		$('#testdiv').css('borderRadius', '50	px');
//	});

	$('#menu li[id^=menu_]').click(function(){
		$('.page').hide();
		$('#page_' + $(this).attr('id')).show();

		return false;
	});
});


//var neshto = document.getElementById('testid');
//var neshtodve = document.getElementsByName('elementname');