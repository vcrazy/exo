$(document).ready(function(){
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
			password: {
				required: true,
				minlength: 5
			},
			email: {
				required: true,
				email: true
                        }
		},
		messages: {
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			email: "Please enter a valid email address"
		}
	});
	
	$("#contactform").validate({
		rules: {
			name: "required",
			message: {
				required: true,
				minlength: 5
			},
			email: {
				required: true,
				email: true
                        }
		},
		messages: {
			name: "Please enter your name",
			message: {
				required: "Please enter some text",
				minlength: "Your message must be at least 5 characters long"
			},
			email: "Please enter a valid email address"
		}
	});
<<<<<<< HEAD
	
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
=======
>>>>>>> 9d225925bcad5a53eabd60b010ae5063bf20f977

	$('#menu li[id^=menu_]').click(function(){
		$('.page').hide();
		$('#page_' + $(this).attr('id')).show();

		return false;
	});
});
